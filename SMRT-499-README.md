1. Need a super user
2. In System > Control Panel >Media Create new folder ‘jupyterhub’. Upload jupyter-long.png to jupyterhub folder
3. Create new Page and Import Analytics Page
4. In Menus > All Menus.
    1. Add new Analytics Menu to point to new Analytics Page (set order after saving, add it to the main menu, add meta tags).
    2. Hide Home Menu by editing the home menu then turning off `Display in menu` from the `Link Type` tab
    3. Rename Share Your Data Menu to Share Data
    4. SEO Title for Analytics Page: Use Jupyter Hub to analyze Smart Columbus data
    5. SEO Meta Tags: Jupyter, Data Science, Python, JupyterHub, JupyterLab, SciPy, Analytics

5. In System > Templates > Pocsmart Details and Files. Add new css file as custom_20180911.css
6. In System > Templates > Pocsmart Details and Files. Paste over tpls/blocks/head.php with local version
6. Update Home Page from Import
7. In System > Control Panel > Modules Edit FooterTop remove Home add Analytics
8. Currently we have to reset the cache on the client side to make css changes appear.

