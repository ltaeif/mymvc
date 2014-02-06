<?php
$API = array(
	'Modules' => array(
		'methods' => array(
			'getAllModules' => array(
				'len' => 0
			),
			'getActiveModules' => array(
				'len' => 0
			),
			'getEnabledModules' => array(
				'len' => 0
			),
			'getDisabledModules' => array(
				'len' => 0
			),
			'getModuleByName' => array(
				'len' => 1
			),
			'updateModule' => array(
				'len' => 1
			)
		)
	),

	/**
	 * Globals Functions
	 */
	'Globals' => array(
		'methods' => array(
			'setGlobals' => array(
				'len' => 0
			),
			'getGlobals' => array(
				'len' => 0
			),
			'getAllGlobals' => array(
				'len' => 0
			),
			'updateGlobals' => array(
				'len' => 1
			)
		)
	),


    /**
     * User Functions
     */
    'User' => array(
        'methods' => array(
            'getUsers' => array(
                'len' => 1
            ),
            'getCurrentUserData' => array(
                'len' => 0
            ),
            'addUser' => array(
                'len' => 1
            ),
            'updateUser' => array(
                'len' => 1
            ),
            'chechPasswordHistory' => array(
                'len' => 1
            ),
            'changeMyPassword' => array(
                'len' => 1
            ),
            'updateMyAccount' => array(
                'len' => 1
            ),
            'verifyUserPass' => array(
                'len' => 1
            ),
            'getProviders' => array(
                'len' => 1
            ),
            'getCurrentUserBasicData' => array(
                'len' => 0
            )
        )
    ),
    /**
     * Authorization Procedures Functions
     */
    'authProcedures' => array(
        'methods' => array(
            'login' => array(
                'len' => 1
            ),
            'ckAuth' => array(
                'len' => 0
            ),
            'unAuth' => array(
                'len' => 0
            ),
            'getSites' => array(
                'len' => 0
            )
        )
    ),


    /**
     * Navigation Function
     */
    'Roles' => array(
        'methods' => array(
            'getRoleForm' => array(
                'len' => 1
            ),
            'getRolesData' => array(
                'len' => 0
            ),
            'saveRolesData' => array(
                'len' => 1
            )
        )
    ),
            'ACL' => array(
            'methods' => array(
                'getAllUserPermsAccess' => array(
                    'len' => 0
                ),
                'hasPermission' => array(
                    'len' => 1
                )
            )
        ),
            /**
             * Navigation Function
             */
            'Logs' => array(
            'methods' => array(
                'getLogs' => array(
                    'len' => 1
                )
            )
        ),
            'Documents' => array(
            'methods' => array(
                'updateDocumentsTitle' => array(
                    'len' => 1
                )
            )
        ),
            'i18nRouter' => array(
            'methods' => array(
                'getTranslation' => array(
                    'len' => 0
                ),
                'getDefaultLanguage' => array(
                    'len' => 0
                ),
                'getAvailableLanguages' => array(
                    'len' => 0
                )
            )
        )

);
