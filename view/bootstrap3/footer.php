<?php
if (!$request->AJAX && !(isset($data['return_json']) && $data['return_json'])) {
    // charge le footer (dans lequel on a notamment injecte les scripts precedents)
    $this->getBlock('cssjs/foot', $data, $request);
?>
    </body>
</html>
<?php
}
