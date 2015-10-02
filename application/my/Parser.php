<?php

/**
 * @author Wojciech Brüggemann <wojtek77@o2.pl>
 */
class My_Parser
{
    const URL = 'https://buddyschool.com/search?keyword=';
    const URL_BASE = 'https://buddyschool.com';
    
    
    /**
     * Get contents of first profile at the webside "https://buddyschool.com"
     * 
     * @param string $search  the keyword for search
     * @return string  contents
     */
    public function buddyschoolFirstProfile($search)
    {
        $contents = file_get_contents(self::URL.rawurlencode($search));
        preg_match(
                '/'
                .'paginator wFull mb20.*?'
                .'onclick=\"document\.location\.href=\'(.[^\']*)'
                .'/s',
                $contents, $m);
        
        $properContents = file_get_contents(self::URL_BASE.$m[1]);
        
        return $properContents;
    }
}
