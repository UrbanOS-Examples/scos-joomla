# scos-joomla
Files which control joomla theme/pages/styling

# How to joomla

This repo serves to allow us to track changes to joomla assets which can be exported or treated as code.  The pages contained in sp_page_builder_pages should be able to be imported as new pages (or over existing pages) in the SP Page Builder interface.

The css directory contains the css files which are served currently and included on the html pages from joomla.  At time of this documents creation, only custom.css has been modified with respect to the production environment.

We used jq to pretty the sp_page_builder_pages to make it easier for a human to parse the diffs

# export sp page
1. In the page builder, click the export button
1. To format the json and put it in git, run the following

```
cat ~/Downloads/template39173.json | jq . > ~/code/scos-joomla/sp_page_builder_pages/data_stories_landing.json
```