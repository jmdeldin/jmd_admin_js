<?php
/**
 * @name           jmd_admin_js
 * @description    Runs page-specific JS in the backend.
 * @author         Jon-Michael Deldin
 * @author_uri     http://jmdeldin.com
 * @version        0.1
 * @type           3
 * @order          9
 */

if (txpinterface === 'admin')
    register_callback('jmd_admin_js', 'admin_side', 'body_end');

function jmd_admin_js()
{
    global $event;
    if ($rs = getRows('select name, js from ' . safe_pfx('txp_js')))
    {
        foreach ($rs as $row)
        {
            if ($row['name'] === 'default' || $row['name'] === $event)
                $out[] = base64_decode($row['js']);
        }
        echo tag(join("\n", $out), 'script', ' type="text/javascript"');
    }
}

