<?php
/*
Welcome to Continue!

_________               _____ _____
__  ____/______ _______ __  /____(_)_______ ____  _______
_  /     _  __ \__  __ \_  __/__  / __  __ \_  / / /_  _ \
/ /___   / /_/ /_  / / // /_  _  /  _  / / // /_/ / /  __/
\____/   \____/ /_/ /_/ \__/  /_/   /_/ /_/ \__,_/  \___/

This is a 2 minute tutorial.

It will walk you through two basic features:
1. Ask a question
2. Edit code
*/

// region —————————————————————————— Part 1: Ask a question about code [⌘ J] ——————————————————————————


// Step 1: Highlight the function below
function bs($a) {
    $n = count($a);
    for ($i = 0; $i < $n - 1; $i++) {
        $s = false;
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($a[$j] > $a[$j + 1]) {
                $t = $a[$j];
                $a[$j] = $a[$j + 1];
                $a[$j + 1] = $t;
                $s = true;
            }
        }
        if (!$s)
            break;
    }

    return $a;
}

//Step 2: Use the keyboard shortcut [⌘ J] to select the code and toggle the Continue input box

// Step 3: Ask a question and press enter
# e.g.) what does this function do?
# e.g.) what should I call this function?

# endregion


# region ————————————————————————————————— Part 2: Edit code [⌘ I] —————————————————————————————————


// Step 1: Highlight this code

# The provided bubble sort function has a time complexity of O(n^2) due to its nested loop structure.
# A more optimized version of the function could be implemented using Python's built-in sorted() function, which uses Timsort and has an average case time complexity of O(n log n).
# However, since the user might want to understand the logic behind optimization, I will provide a slightly modified version of bubble sort with a small improvement.

function ss($a) {
    $n = count($a);
    for ($i = 0; $i < $n - 1; $i++) {
        $mi = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($a[$j] < $a[$mi]) {
                $mi = $j;
            }
        }
        if ($mi != $i) {
            $temp = $a[$i];
            $a[$i] = $a[$mi];
            $a[$mi] = $temp;
        }
    }
    return $a;
}

/*
"""Step 2: Use the keyboard shortcut [⌘ I] to
select the code"""

"""Step 3: Type instructions to edit the code and press Enter"""
# e.g.) "optimize this function"
# e.g.) "edit write comments"

"""Step 4: Use keyboard shortcuts to
accept [⌥ ⇧ Y] or reject [⌥ ⇧ N] the edit"""

# Ready to learn more? Check out the Continue documentation: https://docs.continue.dev
*/