<?php
 require_once '../aside.php';
//  require_once '../../Controlles/UserController/displayUser.php';


?>


<!--===========Content===========-->
<main class="bg-gray-100 flex-grow h-[100vh] relative">
    <!-- ============== header =========== -->

    <!-- ============ Content ============= -->

    <div class="md:p-6 bg-white md:m-5">
        <div class="flex items-center justify-between">
            <div>

            </div>

            <div>

                <!-- <a href="#" class="bg-[#212529] text-white w-[160px] h-[50px] rounded-md">
                    <span data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Ajouter
                    </span>
                </a> -->
                <button class="bg-[#212529] text-white w-[160px] h-[50px] rounded-md" id="addBank">
                    <a href="addAssurance.php">Add Assurance</a>
                </button>
            </div>
        </div>

        <!-- ========== table Banks-desktop ======== -->

        <div class="hidden md:block  rounded-lg overflow-hidden mt-10">
            <table class=" 
           w-full   " id="table1">
                <thead class="  sm:w-full">
                    <tr class="bg-[#212529] text-white h-[60px]">
                        <th class="">ID</th>
                        <th class="">Name</th>
                        <th class="">Logo</th>


                        <th class="">Actions</th>
                    </tr>
                </thead>
                <tbody class="sm:w-full">

                    <!-- <?php 
            //   foreach($userData as $duser) {
              ?> -->
                    <tr class=" pt-10 sm:pt-0  w-full ">

                        <td class=" sm:text-center text-right">
                            <!-- <?php echo  $duser['userId'] ?></td> -->
                        <td class=" sm:text-center text-right">
                            <!-- <?php echo $duser['username'] ?> -->
                        </td>

                        <td class=" sm:text-center 
                             text-right">
                            <!-- <?php echo $duser ['gendre'] ?> -->
                        </td>
                        <td class="  sm:text-center  text-right">
                            <button class="bg-[#212529] text-white w-[35px] h-[35px] rounded-md">
                                <a
                                    href="../../Controlles/UserController/ipdateUser.php?user_id=<?= $duser ['userId'];?>">
                                    <i class="fa-solid fa-pen " style="color:#186F65"></i></a>


                            </button>
                            <button class="bg-[#212529] text-white w-[35px] h-[35px] rounded-md">
                                <a
                                    href="../../Controlles/UserController/deleteUser.php?user_id=<?= $duser ['userId'];?>"><i
                                        class="fa-solid fa-trash " style="color:#186F65"></i></a>

                            </button>


                        </td>

                    </tr>
                    <!-- <?php 
            //   }
              ?> -->

                </tbody>
            </table>
        </div>
        <!-- ========== table Banks-mobile ======== -->
        <div class="block sm:hidden rounded-lg overflow-hidden mt-10">
            <table class=" block w-full  border-2 sm:border-0  " id="table2">
                <thead class="hidden">
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="block  w-full">
                    <!-- <?php 
            //   foreach($userData as $duser) {
              ?> -->
                    <tr class="block pt-10 sm:pt-0   w-full ">

                        <td data-label="id"
                            class="border-b before:content-['id']  before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 sm:before:hidden sm:text-center block    text-right">
                            <?php echo $duser ['userId'] ?></td>
                        <td data-label="username" class="border-b before:content-['username'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                             text-right">
                            <?php echo $duser ['username'] ?>
                        </td>

                        <!-- <?php
                        // Récupérer le rôle de l'utilisateur
                        $userRole = $displayRoleofuser->displaRoleofuser($duser['userId']);
                        ?>

                    <?php foreach ($userRole as $role){
                        ?> -->
                        <td data-label="Role" class="border-b before:content-['Role'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 sm:before:hidden block  sm:text-center 
                            text-right">
                            <!-- <?php echo $role['roleName'] ?> -->
                        </td>
                        <!-- <?php
                }
                ?> -->
                        <td data-label="gendre" class="border-b before:content-['Gendre'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2  sm:before:hidden block sm:text-center 
                             text-right">
                            <!-- <?php echo $duser ['gendre'] ?> -->
                        </td>
                        <td data-label="ACtion"
                            class="border-b before:content-['action'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2  sm:before:hidden  sm:text-center block    text-right">
                            <button class="bg-slate-900 text-white w-[35px] h-[35px] rounded-md">
                                <a href="../../../app/views/users/updateUser.php?user_id=<?= $duser ['userId'];?>">
                                    <i class="fa-solid fa-pen"></i></a>

                            </button>
                            <button class="bg-slate-900 text-white w-[35px] h-[35px] rounded-md">
                                <a
                                    href="../../Controlles/UserController/deleteUser.php?user_id=<?= $duser ['userId'] ;?>"><i
                                        class="fa-solid fa-trash"></i></a>

                            </button>


                        </td>

                    </tr>
                    <!-- <?php 
            //   }
              ?> -->

                </tbody>
            </table>
        </div>



    </div>
    <!-- ============ Content ============= -->


</main>
<!-- ========== overlay ================= -->


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script> -->

<script>
$(document).ready(function() {
    $('#table1').DataTable();

});
$(document).ready(function() {
    $('#table2').DataTable();

});
</script>


</script>

</body>

</html>