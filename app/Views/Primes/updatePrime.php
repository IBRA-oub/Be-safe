<?php

require_once('../../Controllers/ClaimController/DisplayClaimController.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>
    <title>addClients</title>
</head>

<body>
    <section class="max-w-4xl p-6 mx-auto bg-gray-600 rounded-md shadow-xl shadow-gray-500  mt-52">
        <h1 class="text-xl font-bold text-white capitalize dark:text-white">Update Prime</h1>
        <form action="../../Controllers/PrimeController/UpdatePrimeController.php" method="POST">
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">


                <div>
                    <label class="text-white dark:text-gray-200" for="emailAddress">Amount</label>
                    <input id="emailAddress" type="number" name="Amount"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>

                <div>
                    <label class="text-white dark:text-gray-200" for="password">Date</label>
                    <input id="password" type="date" name="Date" class=" block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md
                        dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500
                        dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>

                <div>
                    <label class="text-white dark:text-gray-200" for="passwordConfirmation">Select</label>
                    <select name="Claim_ID" id="" class=" block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md
                        dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500
                        dark:focus:border-blue-500 focus:outline-none focus:ring">
                        <option value="0">chose Claim</option>
                        <?php
            
                            foreach($claimData as $allClaData) {
                                echo "<option value='" . $allClaData['Claim_ID'] . "' >" . $allClaData['Descreption'] . "</option>";
                            }
                            ?>
                    </select>
                </div>

                <?php $Premium_ID = $_GET['Premium_ID']; ?>

                <input type="hidden" name="Premium_ID" value="<?=$Premium_ID?>">
            </div>

            <div class="flex justify-end mt-6">
                <button type="submit"
                    class="px-6 py-2 leading-5 text-black transition-colors duration-200 transform bg-white rounded-md hover:bg-gray-800 hover:text-white focus:outline-none focus:bg-gray-600">update
                    Prime

                </button>
            </div>
        </form>
    </section>

</body>

</html>