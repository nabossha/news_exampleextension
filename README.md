# news_exampleextension

This extension extends EXT:news with new types and a field "author profile" which can contain a link to any page.

### List view of the news types:

![Screenshot 1](/Resources/Public/Images/screenshot-1.png)

### New field in the tab "Relations" of the news record:

![Screenshot 1](/Resources/Public/Images/screenshot-2.png)

## Installation:

- Install the extension
- update the database in the install tool if necessary

## Usage:

### Fluid Templates:

- `{newsItem.type}` contains four new types: blogText, blogImage, blogVideo or blogEvent.
- `{newsItem.authorprofile}` has the uid of the author profile page.

## Todo:

- Fix backend list view. Currently list view show type "news" for the new types. This is a Core bug that will probably get fixed in TYPO3 6.2.11. See [#65689](https://forge.typo3.org/issues/65689) for details. Kudos to Georg Ringer for fixing this issue.

## License and Authors

Authors: [Peter Kraume](http://github.com/peterkraume) [(@Cybersmog)](http://twitter.com/cybersmog)

Copyright: 2015, Peter Kraume

This script is part of the TYPO3 project. The TYPO3 project is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

The GNU General Public License can be found at
http://www.gnu.org/copyleft/gpl.html.

This script is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.