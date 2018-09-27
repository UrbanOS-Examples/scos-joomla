1. Need a super user

## Upload Images
1. System > Control Panel > Media
1. Create new folder `streaming_data_story`
1. Upload all of the images in `<root>/images/streaming_data_story` of this repo

## Import Streaming Data Story JSON
1. System > Control Panel > Pages > New > Import > `<root>/sp_page_builder_pages/cota_data_story.json`
1. Title: `Streaming Data Feed Shows Riders Where Their Bus Is In Real-Time`
1. Save

## Import Data Story Summaries and Home JSON
1. System > Control Panel > Pages > Data Stories Landing > Import > `<root>/sp_page_builder_pages/data_stories_landing.json` > Save
1. System > Control Panel > Pages > Home > Import > `<root>/sp_page_builder_pages/home_page.json` > Save

## Create a Menu entry for Streaming Data Story
1. Navigate to Menus > Main Menu > New
1. Menu Title: `Streaming Data Feed Shows Riders Where Their Bus Is In Real-Time`
1. Menu Type: SP Page Builder > Page
1. Select Page: `Streaming Data Feed Shows Riders Where Their Bus Is In Real-Time`
1. Parent Item: `Data Stories`
1. Link Type > Display In Menu > No
1. Metadata > Meta Keywords > `COTA, COTA Streaming Data, Streaming Data, Bus, Location`
1. Save

## Clear Cache
1. System > Clear Cache > Delete All
