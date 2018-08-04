# Copyright 2018 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

"""This script is used to synthesize generated parts of this library."""

import synthtool as s
import synthtool.gcp as gcp
import logging
import os
import glob

logging.basicConfig(level=logging.DEBUG)

repository = gcp.RepositoryGenerator(
    "https://github.com/chingor13/discovery-artifact-manager.git"
)

python_path = os.getenv("PYTHONPATH", ".")
environment = os.environ
environment["PYTHONPATH"] = f"{python_path}:{repository.repository}/google-api-client-generator/src"

logging.info(environment)

commands = [
    "mkdir -p output_dir",
    "python2 -m pip install --upgrade pip",
    "python2 -m pip install django==1.8.12 httplib2 google-apputils python-gflags google-api-python-client",
]

for file in glob.glob(str(repository.repository / "discoveries/*.v*.json")):
    logging.info(file)
    disco = os.path.relpath(file, repository.repository)
    logging.info(disco)
    commands.append(f"python2 google-api-client-generator/src/googleapis/codegen/generate_library.py --output_dir=./output_dir --input={disco} --language=php --language_variant=1.2.0")

library = repository.repository_library(commands, env=environment)

# copy src, test, samples directories
s.copy(library / "output_dir", "src/Google/Service/")
