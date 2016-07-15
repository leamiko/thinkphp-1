<?php
return array(
	//'配置项'=>'配置值'
    'URL_HTML_SUFFIX'=>'',
    'DEFAULT_FILTER'        =>  'strip_tags,stripslashes,htmlspecialchars',
    'SHOW_PAGE_TRACE'=>true,
    //Auth配置
    'AUTH_CONFIG' => array(
        'AUTH_ON' => true,
        'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
        // 用户组数据表名
        'AUTH_GROUP' => 'tomtp_group',
        // 用户-用户组关系表
        'AUTH_GROUP_ACCESS' => 'tomtp_group_access',
        // 权限规则表
        'AUTH_RULE' => 'tomtp_rule',
        // 用户信息表
        'AUTH_USER' => 'tomtp_user',
    ),
);