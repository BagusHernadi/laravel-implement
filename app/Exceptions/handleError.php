<?php

public function handleError($exception)
{
    // Log the error
    \Log::error($exception->getMessage());
    // ... rest of the code
}
