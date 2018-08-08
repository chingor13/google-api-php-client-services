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
import synthtool.shell as shell
import synthtool.sources.git as git
import logging
import os
import glob

logging.basicConfig(level=logging.DEBUG)

repository = git.clone("https://github.com/chingor13/discovery-artifact-manager.git", depth=1)

shell.run("mkdir -p output_dir".split(), cwd=repository)
shell.run("python2 -m pip install django==1.8.12 httplib2 google-apputils python-gflags google-api-python-client".split(), cwd=repository)

# run the generator for each discovery json file
for file in glob.glob(str(repository / "discoveries/*.v*.json")):
    disco = os.path.relpath(file, repository)
    shell.run(f"python2 googleapis/codegen/generate_library.py --output_dir=./output_dir --input=../../{disco} --language=php --language_variant=1.2.0".split(), cwd=repository / "google-api-client-generator/src")

# copy src
s.copy(repository / "output_dir", "src/Google/Service/")
