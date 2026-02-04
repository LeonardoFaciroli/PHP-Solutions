<?php
$sweetheart = new HighSchoolSweetheart();
$sweetheart ->firstLetter("Jane");
$sweetheart->initials("Jane Doe");
$sweetheart->pair("Avery Bryant", "Charlie Dixon");
class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {  
        return mb_substr(trim($name), 0, 1, "UTF-8"); //funcao para retornar o valor do indice '0' (start = 0)  e pegar a primeria letra (length = 1) encoding (UTF-8 garantindo que caracteres como 'ç' nao quebrem)
    }

    public function initial(string $name): string
    {
        $letter = $this ->firstLetter($name);
        $upper = mb_strtoupper($letter, "UTF-8");
        return $upper . ".";
    }

    public function initials(string $name): string
    {
        [$firstName, $lastName] = explode(" ", trim($name), 2);
        return $this->initial($firstName) . " " . $this->initial($lastName);
    }

    public function pair(string $sweetheart, string $crush): string
{
    $left  = $this->initials($sweetheart); // "A. B."
    $right = $this->initials($crush);      // "C. D."

    $centerText = $left . "  +  " . $right;                 // "A. B.  +  C. D."
    $padded = str_pad($centerText, 25, " ", STR_PAD_BOTH);  // miolo com 25 chars

    $lines = [
        "     ******       ******",
        "   **      **   **      **",
        " **         ** **         **",
        "**            *            **",
        "**                         **",
        "**"       . $padded .      "**",
        " **                       **",
        "   **                   **",
        "     **               **",
        "       **           **",
        "         **       **",
        "           **   **",
        "             ***",
        "              *",
    ];

    return implode("\n", $lines);
}

}
