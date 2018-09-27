1. Need a super user

## Upload Images
1. System > Control Panel > Media
1. Create new folder `streaming_data_story`
1. Upload all of the images in `<root>/images/streaming_data_story` of this repo
1. Create new folder `crash_data_story`
1. Upload all of the images in `<root>/images/crash_data_story` of this repo

## Import Streaming Data Story JSON
1. System > Control Panel > Pages > New > Import > `<root>/sp_page_builder_pages/cota_data_story.json`
2. Title: `Streaming Data Feed Shows Riders Where Their Bus Is In Real-Time`
3. Options > CSS > Paste the following:
```css
@media (min-width:991px) {
  .vertical-bar {
  padding-right: 28px;
  border-right: 3px solid #000000;
  }
}

.code-block {
  border-top: 5px solid #000000;
  background-color: #d9d9d9;
  padding: 35px;
  font-family: Courier New, Courier, Lucida Sans Typewriter, Lucida Typewriter, monospace;
  font-size: 16px;
  word-wrap: break-word;
}

.wrap-text {
  word-wrap: break-word;
}
```
4. Save

## Import Data Story Summaries, Crash Data Story, and Home JSON
1. System > Control Panel > Pages > Data Stories Landing > Import > `<root>/sp_page_builder_pages/data_stories_landing.json` > Save
1. System > Control Panel > Pages > Crash Data Puts City In The Know For Improved Traffic Safety > Import > `<root>/sp_page_builder_pages/data_stories_landing.json` > Save
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
