#!/usr/bin/env bash

TOOL_DIR=.Build/tools/phpstan
TOOL_PACKAGE="phpstan/phpstan:^2 phpstan/phpdoc-parser phpstan/phpstan-phpunit phpstan/phpstan-strict-rules bnf/phpstan-psr-container"
TOOL_COMMAND="phpstan analyse --verbose --no-progress"

# --generate-baseline=phpstan-baseline.neon

source Scripts/runphptool.sh
