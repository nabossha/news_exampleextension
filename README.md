# news_exampleextension

This extension extends EXT:news with new types and a field "author profile" which can contain a link to any page.

## Installation:

- Install the extension
- update the database in the install tool if necessary

## Usage:

### Fluid Templates:

- `{newsItem.type}` contains four new types: blogText, blogImage, blogVideo or blogEvent.
- `{newsItem.authorprofile}` has the uid of the author profile page.

## Todo:

- Fix backend list view. Currently list view show type "news" for the new types.

## License and Authors

Authors: [Peter Kraume](http://github.com/peterkraume) [(@Cybersmog)](http://twitter.com/cybersmog)

Copyright: 2015, Peter Kraume