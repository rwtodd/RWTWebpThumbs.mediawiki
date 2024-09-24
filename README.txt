An extension to extend mediawiki's core handlers for PNG, Jpeg, and webp.

It:

 - makes the thumbnails for all three types webp-formatted.
 - tells mediawiki to assume webp files are renderable on all browsers

This cuts down on the size of the thumbnails quite a bit, and since most of the
images you see on a mediawiki are technically thumbnails, it's a good thing.

* Don't use this if your server isn't equipped to make webp files.  The extension doesn't tell mediawiki
how to do it... it just says to make the thumbnails image/webp and leaves it up to the core code to
make that happen.

* Don't use this if your users aren't using browsers that can view webp files.

* Maybe just don't use this.  I'm not a mediawiki expert... just a user who wanted smaller thumbnails.

