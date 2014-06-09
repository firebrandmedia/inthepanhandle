inthepanhandle
==============

InThePanhandle.com Redesign

2014 redesign of InThePanhandle.com and upgrade of EECMS to 2.x.

05/22/14
==============

Removed unused templates

Removed embeds from the following template groups:
   
    - business_directory
    - gov
    - events
    - itp_blog
    - media
    - news
    - search
    - shop_local
    - site
    - support
    - travel
    - users

Deprecated directories that were not updated
    
    - advertise
    - embeds (bloody embeds!)
    - Global Variables
    - itpwv_app (nothing to see here)
    - xml_sitemaps

05/27/14
==============
Prepared plugins, modules and extensions in advance of EE2 upgrade. Uninstalled unused add-ons and removed related code from templates.

Removed Splitter code from the following:
   
    - events/index
    - events/by_category
    - events/month
    - news/index
    - itp_blog/index

Removed Splitter plugin

Removed Randomizer plugin

Removed Blogger Listing plugin

Removed Category Parent Style code from the following:
    
    - business_directory/index

Removed Category Parent Style plugin

Removed {exp:cp_access} code from multiple files via Find / Replace

Removed CP Access plugin

Removed the FLV Media code from the following:
    
    - support/tutorials
    - support/tutorial_details

Removed FLV Media plugin

Removed Who’s Online plugin

Removed LG Better Meta code from:
    
    - business_directory/listing
    - xml_sitemaps/

Added standard EE code to Title Tags for:

    - business_directory/listing

Removed LG Better Meta plugin and disabled extension

Removed MD Eexcerpt Code from:
    
    - site/index
    - business_directory/archives
    - events/index
    - events/category_archives

Removed MD Eexcerpt Plugin

Removed Blacklist / Whitelist Module

Removed Twitter Timeline Plugin

Removed Blacklist / Whiteliste Module

05/28/14
==============

Transitioned Event Calendar from Repeet plugin to Solspace Calendar module

    - Updated event calendar templates with Solspace Calendar code
    - Moved future events to new calendar weblog
    - Updated navigational links to point to new calendar page
    - Disabled Event Calendar (Repeet) weblog
    - Transisitioned user groups to new Event Calendar (Solspace)
    - Updated search form to search within the Event Calendar (Solspace) weblog
    - Updated Search Results page to link to events
    - Removed Repeet-specific weblog fields
    - Removed Repeet plugin
    - Pushed new event calendar to live site
    - Pushed new event calendar to live site

05/28/14
==============

Updated Solspace Freeform module to 3.1.5

Updated Solspace User module to 3.1.10

06/09/14
==============

Removed Solspace Facebook Connect code
