<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace local_zmulticontentrendering\output;

/**
 * Modifies Moodle's main-content to place the content in a row and columns
 *
 * @package    local_zmulticontentrendering
 * @copyright  2024 Bernhard Strehl <moodle@bytesparrow.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class core_modifier extends \core_modifier_base {

  /**
   * add html to main conten
   */
  public function get_content_to_attach_to_main() {
    //nothing to add here
  }

  function modify_main_content(&$maincontent) {
    global $OUTPUT;
    $model = new \stdClass();
    //finds content and re-renders it using template local_streamwrapper/wrapped_content

    $model->basecontent = $this->extractBaseContent($maincontent);
    $model->pdfcontent = $this->extractPDF($maincontent);

    //the template does the logic. If no PDF is present, it will only print one column, not two.
    $maincontent = $OUTPUT->render_from_template('local_zmulticontentrendering/wrapped_content', $model);
  }

  /**
   * finds the main content
   * @param type $maincontent
   */
  function extractBaseContent(&$maincontent) {
    preg_match('/\[MAIN CONTENT GOES HERE - [a-zA-Z0-9]*\]/i', $maincontent, $phpmatchobject);
    return $phpmatchobject[0];
  }

  /**
   * finds a renderer pdf
   * @param type $maincontent
   */
  function extractPDF(&$maincontent) {
    preg_match('/<!--html5pdf-->.*<!--\/html5pdf-->/ims', $maincontent, $phpmatchobject);
    return $phpmatchobject[0];
  }

}
