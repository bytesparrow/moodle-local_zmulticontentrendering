# Enhancing User Experience with Multi-Content Rendering #
Users can now enjoy the convenience of accessing H5P interactive elements, PDF documents, and the messagestream simultaneously, enhancing comprehension and engagement.
By consolidating multiple content formats into a unified view, this plugin promotes accessibility for users with diverse learning preferences and needs.

We believe that this plugin will significantly enrich the user experience, enabling educators, learners, and content creators to interact with multimedia content more intuitively and effectively. We're excited to see how this enhancement positively impacts your workflows and learning outcomes.

Hint: this plugin is only useful in certain environments. But you could use it as a template.
Depends on theme Contentmodifier

... why the Z in zmulticontentrendering?
This is for Moodle. This plugin must be loaded last.
## Installing via uploaded ZIP file ##

1. Log in to your Moodle site as an admin and go to _Site administration >
   Plugins > Install plugins_.
2. Upload the ZIP file with the plugin code. You should only be prompted to add
   extra details if your plugin type is not automatically detected.
2.1 If Moodle reports missing plugins, install them as well.
3. Check the plugin validation report and finish the installation.

## Installing manually ##

The plugin can be also installed by putting the contents of this directory to

    {your/moodle/dirroot}/local/multicontentrendering

Afterwards, log in to your Moodle site as an admin and go to _Site administration >
Notifications_ to complete the installation.

Alternatively, you can run

    $ php admin/cli/upgrade.php

to complete the installation from the command line.

## License ##

2024 Bernhard Strehl <moodle@bytesparrow.de>

This program is free software: you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation, either version 3 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with
this program.  If not, see <https://www.gnu.org/licenses/>.
