<?php

return [
    'Base DN' => 'የDN መሰረት',
    'E-Mail Address Attribute' => 'የኢሜል አድራሻ ባህሪ',
    'Enable LDAP Support' => 'የLDAP እገዛው እንዲሰራ አድርግ',
    'Encryption' => 'ሚስጥራዊ',
    'Fetch/Update Users Automatically' => 'በራስ ሰር ተጠቃሚውን ፈልግ/አዘምን ',
    'Hostname' => 'የአስተናጋጅ ስም',
    'ID Attribute' => 'የልዩ መታወቂያ ባህሪ',
    'LDAP' => '@LDAP@',
    'Login Filter' => 'የመግቢያ ማጣሪያ',
    'Not changeable LDAP attribute to unambiguously identify the user in the directory. If empty the user will be determined automatically by e-mail address or username. Examples: objectguid (ActiveDirectory) or uidNumber (OpenLDAP)' => 'ተጠቃሚው በዝርዝር ማውጫ ላይ ያለአሻሚናት እንዲለይ የLDAPው ባህሪ አይቀየርም። ባዶ ከሆነ ተጠቃሚው በኢሜል አድራሻ ወይም በተመጠቀሚያ ስም በራስ ሰር የሚወስን ይሆናል።',
    'Password' => 'የይለፍ ቃል',
    'Port' => 'መተላለፊያ',
    'User Filter' => 'የተጠቃሚ ማስፈሪያ',
    'Username' => 'የመጠቃሚያ ስም',
    'Username Attribute' => 'የመጠቀሚያ ስም ባህሪ',
    'Defines the filter to apply, when login is attempted. %s replaces the username in the login action. Example: &quot;(sAMAccountName=%s)&quot; or &quot;(uid=%s)&quot;' => '',
    'Ignored LDAP entries' => '',
    'LDAP Attribute for E-Mail Address. Default: &quot;mail&quot;' => '',
    'LDAP Attribute for Username. Example: &quot;uid&quot; or &quot;sAMAccountName&quot;' => '',
    'Limit access to users meeting this criteria. Example: &quot;(objectClass=posixAccount)&quot; or &quot;(&(objectClass=person)(memberOf=CN=Workers,CN=Users,DC=myDomain,DC=com))&quot;' => '',
    'One DN per line which should not be imported automatically.' => '',
    'Specify your LDAP-backend used to fetch user accounts.' => '',
    'Status: Error! (Message: {message})' => '',
    'Status: OK! ({userCount} Users)' => '',
    'Status: Warning! (No users found using the ldap user filter!)' => '',
    'The default base DN used for searching for accounts.' => '',
    'The default credentials password (used only with username above).' => '',
    'The default credentials username. Some servers require that this be in DN form. This must be given in DN form if the LDAP server requires a DN to bind and binding should be possible with simple usernames.' => '',
];
