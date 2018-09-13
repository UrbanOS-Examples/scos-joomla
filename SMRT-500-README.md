1. Need a super user
2. Import Jupyter Beta Waitlist Form
    1. tar.gz the contents of `forms/jupyter-beta-waitlist-form` so that files are at its root
    2. In `Components` > `RSForm! Pro` > `Backup/Restore` go to the restore tab
    3. Choose the zip file and select `No` for `Overwrite existing forms?` and `Keep form IDs from backup` and click restore

3. Create Jupyter Beta Waitlist Form Module
    1. In `Extensions` > `Modules`
    2. Create a new RSForm! Pro module called "Jupyter Beta Waitlist Form Module"
    3. Specify the Jupyter Beta Waitlist Form as the Form ID
    4. Set the `Module Class Suffix` to "scos-responsive"

4. Import Jupyter Beta Waitlist Page
    1. In `SP Page Builder` > `Pages`
    2. Click new and then import the `sp_page_builder_pages/jupyter_beta_waitlist_page.json` file
    3. Set the `Title` of the new Page to "Jupyter Beta Waitlist"
    4. Click on the edit (pencil) icon for the `Joomla Module` at the bottom of the page, and verify that "Jupyter Beta Waitlist Form Module" is in the `Module` dropdown.

5. Create new Menu Item for the Jupyter Beta Waitlist Page
    1. In `Menus` > `All Menus`
    2. Add new Menu Item called "Jupyter Beta Waitlist" (alias of jupyter-beta-waitlist) to point to new Jupyter Beta Waitlist Page
    3. Open `Menu Item Type` and select `SP Page Builder` > `Page`
    4. Select "Jupyter Beta Waitlist" in the `Select Page` area
    5. Select `Main Menu` in the `Menu` dropdown, and select `Analytics` for the `Parent Item` on the `Details` tab
    6. Hide it from the top horizontal menu by turning off `Display in menu` from the `Link Type` tab
    7. SEO Title for Jupyter Beta Waitlist Page: "Apply for Jupyter waitlist to use Jupyter Hub to analyze Smart Columbus data"
    8. SEO Meta Tags: Jupyter, Data Science, Python, JupyterHub, JupyterLab, SciPy, Analytics

6. Import an update to the Analytics Page
    1. In `SP Page Builder` > `Pages`
    2. Edit the Analytics Page
    3. Import the `sp_page_builder_pages/analytics_page.json` file

7. Import new custom CSS
    1. Enter `System` > `Control Panel`
    2. In `Templates` > `Templates` > `Pocsmart Details and Files`
    3. Add new css file from `css/custom_20180912.css` as `custom_20180912.css`
    4. Paste over `tpls/blocks/head.php` with local version
    5. Currently we have to reset the cache on the client side to make css changes appear.