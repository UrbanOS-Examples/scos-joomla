Main smartcolumbusos site does not iFrame the discovery UI into itself
smartcolumbusos.com/data 301 redirects to discovery UI
The user is redirected to a properly branded discovery-ui
The search box on the smart columbus homepage should redirect to discovery-ui with the search performed.
Data story iframes will need reworked so menu-in-menu does not get displayed. (Work with jake on the best way to design this experience)
Run zap and should no longer see iFrame header.

## Remove Data iFrame and redirect
+ Unpublish Data Page
+ Go to Components -> Redirects, set `New Url` of Data to root url of discovery ui. Ex: `/data` becomes `https://discovery.dev.internal.smartcolumbusos.com/`
+ SP Page Builder > Pages > Data Upgrade > unpublish

## Update Navbar link
+ Menu, Data
+ System Links -> URL
+ Fill in URL with root url of discovery ui

## Update Search Box
+ SP Page Builder > Pages > Home
+ Import /code/scos-joomla/sp_page_builder_pages/home_page.json
+ Update link to proper environment
+ Save
+ Close

## Data Story iFrames
+ SP Page Builder > Pages > Home
+ Import /code/scos-joomla/sp_page_builder_pages/data_story_developers_needed.json
+ Update link to proper environment
+ Save
+ Close


<form action="https://discovery.smartcolumbusos.com" target="_top" >
<input class="search-input" type="text" name="q" placeholder="Search Datasets...">
<input src="/templates/pocsmart/images/searchButtonBlue.png" type="image" value="Search" style="display: inline-block;position: absolute;right: 10px;width: 25px;top: 5px;">
</form>

.search-input {
   width: 100%;
}


<a class="browse-button" href="https://discovery.dev.internal.smartcolumbusos.com/?q=bridges&apiAccessible=false">Browse Bridge Datasets</a></div>

.browse-button {
   background: #00aeef;
   color: #fff;
   padding: 5px 10px;
   display: inline-block;
   font-weight: bold;
   margin-top: 20px;"
}