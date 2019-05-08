# Upload new module

1. Zip `mod_datasearch` folder
2. Login to joomla > Navigate to Extensions > Manage > Install
3. Select "upload package file"
4. Drag & drop zip on manage extensions page to upload

To check successful installation, select "manage" and search for "mod_data"

# Create module instance

1.  Navigate to Extensions > Modules
2. Click "New"
3. Select "mod_datasearch"
4. Title: "Search Box on Home Page - Search Data in iFrame"
5. Position, select "ckan-search-homepage"
6. Click "Save & Close"

# Update the data_page

1. Navigate to SP Page Builder > Pages > Data Upgrade
2. Import /code/scos-joomla/sp_page_builder_pages/data_page.json
3. Update URL (3 instances) in iframe code to ensure it points to correct environment
4. Save
5. Close

# Update the home page

1. Navigate to SP Page Builder > Pages > Home
2. Import /code/scos-joomla/sp_page_builder_pages/home_page.json
3. Click edit pencil icon on "Joomla Module - Search Module"
4. Update the "Module" select box to point to new "Search Box on Home Page - Search Data in iFrame" module
5. Apply
6. Save
7. Close


