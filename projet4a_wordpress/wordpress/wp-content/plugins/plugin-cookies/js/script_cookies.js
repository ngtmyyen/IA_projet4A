(function() {
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('btn-accept').addEventListener('click', function() {
            console.log('Click accept');
            document.cookie = "cookie_consent_accept=" + true;
        });

        document.getElementById('btn-refuse').addEventListener('click', function() {
            console.log('Click refuse');
            document.cookie = "cookie_consent_accept=" + false;
        });
    }, false);
 })();