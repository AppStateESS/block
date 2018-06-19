<?php

/**
 * @author Matthew McNaney <mcnaneym@appstate.edu>
 */
function block_update(&$content, $currentVersion)
{
    switch ($currentVersion) {
        
        case version_compare($currentVersion, '1.3.11', '<'):
            $content[] = '<pre>1.3.11 and under - update in phpWebSite installation.
</pre>';
        case version_compare($currentVersion, '1.4.0', '<'):
            $content[] = '<pre>
1.4.0
----------
Canopy version
</pre>';
    }
    return TRUE;
}
