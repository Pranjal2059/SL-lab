 <?php
    $file = "essay.txt";

    $handle = fopen($file, "r");

    if ($handle) {
        $wordCount = 0;
        $inWord = false;

        while (($char = fgetc($handle)) !== false) {
            if (ctype_alnum($char)) {
                $inWord = true;
            } else {
                if ($inWord) {
                    $wordCount++;
                    $inWord = false;
                }
            }
        }

        fclose($handle);

        if ($inWord) {
            $wordCount++;
        }

        echo "<p>Word count in \"essay.txt\": $wordCount</p>";
    } else {
        echo "Unable to open file.";
    }
    ?>