<?php
file_put_contents("test.txt", "This is a test! \r\n");
echo "test.txt was created!";
file_put_contents("test.txt","The test was successul! \r\n", FILE_APPEND);
echo "test.txt was updated!";
?> 
