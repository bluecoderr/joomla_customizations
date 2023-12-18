# Description #
The file `Myfield.php` emulates a class of a `field` (a.k.a Joomla! Custom Field) plugin that adds a new type of Custom Field in the Joomla! CMS.

The purpose of the file is to introduce the function `onJFiltersOptionsAfterCreation` to 3rd party developers of Custom Field plugins.
That function allows the plugin to change the properties of each option (i.e. any selectable link) of the [JFilters](https://blue-coder.com/jfilters) filters.
Its primary goal is to allow the plugins to change the option labels (I.e. the visible label).

We urge you not to change other properties, unless you are confident of what they are about. 
