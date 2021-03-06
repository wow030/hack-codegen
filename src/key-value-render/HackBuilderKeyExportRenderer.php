<?hh // strict
/*
 *  Copyright (c) 2015, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the BSD-style license found in the
 *  LICENSE file in the root directory of this source tree. An additional grant
 *  of patent rights can be found in the PATENTS file in the same directory.
 *
 */

namespace Facebook\HackCodegen;

final class HackBuilderKeyExportRenderer
implements IHackBuilderKeyRenderer<arraykey> {
  final public function render(
    IHackCodegenConfig $_,
    arraykey $value,
  ): string {
    return normalized_var_export($value);
  }
}
