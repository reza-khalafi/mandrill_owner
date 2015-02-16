Set up:
1. Copy plugins\filemanager folder into [CKEditor]\plugins\ folder in your site.

2. Open plugins\filemanager\settings.cfm and provide the absolute path and URL to your storage folder. 
   Example : Absolute path would be : C:\interpub\wwwroot\mysite.com\userFiles
   and URL would be : http://www.mysite.com/userFiles
   If you want to store files in a multi-user environment, you can programmatically change this location (such as C:\interpub\wwwroot\mysite.com\userFiles\#session.users_id#)

3. Add 'filemanager' plugin to your CKeditor's 'extraPlugins' setting argument. Refer to index.cfm file for an example.

4. Optional: FileManager depend on CKeditor's 'Flash' plugin to handle swf files. Without that FileManager could not embed SWF files
   into your document.

5. Optional: FileManager use jQuery and it been loaded from jQuery-CDN into filemanager/index.cfm file. If you want to include
   your own copy, please provide in there.

**************************************************************************
                                IMPORTANT
Add your own user authentication at the top of filemanager.cfc, upload.cfm and folder.cfm - if you do not authenticate access to these pages, anyone will be able to edit/delete/update files. 
**************************************************************************

Please content me at : www.cflove.org, if you have any issues.