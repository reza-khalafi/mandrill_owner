<cfsilent>
<!--- absolute path to User's File storage folder  --->
<cfset settings.UserFiles 		= ""> <!--- like #ExpandPath('../../../../UserFiles')# --->
<!--- URL to user's file storage folder            --->
<cfset settings.UserFilesURL	= ""> <!--- like : http://myste.com/UserFiles --->
<!--- image size for thubnail images    --->
<cfset settings.thumbSize		= 120>
<!--- image size for medium size images --->
<cfset settings.middleSize		= 250>
<!--- Permision for linux               --->
<cfset settings.chomd			= "777">
<!--- disallowed file types             --->
<cfset settings.disfiles		= "cfc,exe,php,asp,cfm,cfml">
</cfsilent>