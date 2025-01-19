<?php

return [
    'Base DN' => 'Base DN',
    'Defines the filter to apply, when login is attempted. %s replaces the username in the login action. Example: &quot;(sAMAccountName=%s)&quot; or &quot;(uid=%s)&quot;' => 'Définit le filtre à appliquer, lors d\'une tentative de connexion. %s remplace le nom d\'utilisateur lors de la connexion. Exemple : &quot;(sAMAccountName=%s)&quot; or &quot;(uid=%s)&quot;',
    'E-Mail Address Attribute' => 'Attribut d\'adresse e-mail',
    'Enable LDAP Support' => 'Activer le support LDAP',
    'Encryption' => 'Chiffrement',
    'Fetch/Update Users Automatically' => 'Récupérer/mettre à jour les utilisateurs automatiquement',
    'Hostname' => 'Nom du serveur',
    'ID Attribute' => 'ID d\'attribut',
    'Ignored LDAP entries' => 'Entrées LDAP ignorées',
    'LDAP' => 'LDAP',
    'LDAP Attribute for E-Mail Address. Default: &quot;mail&quot;' => 'Attribut LDAP pour l\'adresse e-mail. Par défaut: "mail"',
    'LDAP Attribute for Username. Example: &quot;uid&quot; or &quot;sAMAccountName&quot;' => 'Attribut LDAP pour le nom d\'utilisateur. Exemple: "uid" ou "sAMAccountName"',
    'Limit access to users meeting this criteria. Example: &quot;(objectClass=posixAccount)&quot; or &quot;(&(objectClass=person)(memberOf=CN=Workers,CN=Users,DC=myDomain,DC=com))&quot;' => 'Limiter l\'accès aux utilisateurs correspondants à ce critère. Exemple: "(objectClass=posixAccount)" ou "(&amp;(objectClass=person)(memberOf=CN=Workers,CN=Users,DC=myDomain,DC=com))"',
    'Login Filter' => 'Filtre Login',
    'Not changeable LDAP attribute to unambiguously identify the user in the directory. If empty the user will be determined automatically by e-mail address or username. Examples: objectguid (ActiveDirectory) or uidNumber (OpenLDAP)' => 'Attribut LDAP non modifiable pour identifier sans ambiguïté un utilisateur dans l\'annuaire. Si ce champ est vide, l\'utilisateur sera identifié par son adresse e-mail ou son nom d\'utilisateur. Exemples : objectguid (ActiveDirectory) ou uidNumber (OpenLDAP)',
    'One DN per line which should not be imported automatically.' => 'Un DN par ligne qui ne doit pas être automatiquement importé.',
    'Password' => 'Mot de passe',
    'Port' => 'Port',
    'Specify your LDAP-backend used to fetch user accounts.' => 'Veuillez spécifier l\'utilisateur LDAP utilisé pour récupérer les utilisateurs.',
    'Status: Error! (Message: {message})' => 'Statut : Erreur ! (Message : {message})',
    'Status: OK! ({userCount} Users)' => 'Statut  : OK ! ({userCount} Utilisateurs)',
    'Status: Warning! (No users found using the ldap user filter!)' => 'Statut : Attention (aucun utilisateur trouvé en utilisant ce filtre d\'utilisateur LDAP) !',
    'The default base DN used for searching for accounts.' => 'La base par défaut DN utilisé pour la recherche de comptes.',
    'The default credentials password (used only with username above).' => 'Le mot de passe par défaut des informations d\'identification (utilisé uniquement avec identifiant ci-dessus).',
    'The default credentials username. Some servers require that this be in DN form. This must be given in DN form if the LDAP server requires a DN to bind and binding should be possible with simple usernames.' => 'Le nom d\'utilisateur par défaut de l\'identification. Certains serveurs exigent cette information dans le formulaire DN. Celle-ci doit être précisée dans le formulaire DN si le serveur LDAP exige un lien vers un DN, et ce lien doit être possible avec de simples noms d\'utilisateur.',
    'User Filter' => 'Filtre utilisateur',
    'Username' => 'Identifiant',
    'Username Attribute' => 'Attribut utilisateur',
];
