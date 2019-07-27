# Electro Theme Categories Search

## Installation


1. Download the electrothemecategoriessearch.ocmod.zip file.

2. Login to Admin console of your Opencart system.

3. Choose "Extensions" -> "Installer".

4. Click on "Upload" button.

5. Choose electrothemecategoriessearch.ocmod.zip file.


## Configuration


6. Choose "Extensions" -> "Extensions".

7. Select "Modules" from "Filter" selectbox.

8. Find "Electro Theme - Categories Search" in "Modules" list.

9. Click on "Install" button of the founded item.

10. Then click on "Edit" button.

11. When the module's page appears:

- type a name for the module in "Name";

- choose "Enabled" in "Status";

- click on "Save" button on the top right corner of the page.


## Using the module



13. Click on "Design" button on the left sidebar. 

14. Then click on "Layouts".

Note that due to some restrictions of the Opencart system you should add the module for EACH layout on which you want to see the module. If you want to add the module on "Specials" template (route=product/special) you shouldn't choose "Content Top" position (use any else position).

15. Choose the layout where you want to see the module.

16. Click on "Edit" button of the selected layout.

17. Choose position for your module on the selected layout's page (Column Left, Column Right, Content Top, Content Bottom);

18. Click on "Add module" button for the choosen module.

19. Click on "Save" button on the top right corner of the page.


## Notice

If you have installed, configured and placed the module on a layout and after reloading the page you see an error or warning message like 
    "file_get_contents(<ANY PATH>/electrothemecategoriessearch.twig): failed to open stream: Permission denied " 
you should check permissions for the file (electrothemecategoriessearch.twig). Some hosting providers change permissions for uploaded files so the server could not execute or even read the files.
