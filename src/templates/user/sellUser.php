<?php
include BASE_PATH.'/src/templates/components/head.php';
include BASE_PATH.'/src/templates/components/navbarLoggedUser.php';
?>
<script src="<?php echo BASE_URL ;?>/src/js/sell.js" defer ></script>
<script src ="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
<div class="h-fit bg-gray-100 pt-20 grid">
    <h1 class="mb-10 text-center text-2xl font-bold">Sell criptos</h1>
<?php
 if(isset($_GET['money'])){
  switch($_GET['money']){
      case 'noMoney':
        echo '<p class="text-red text-center">There is not enough money in the market.<br>
        Sorry baby!</p><br>';
        echo '<p class = "text-black text-center">Click <a class="text-sky-600" href= "wallet-user.php">HERE</a> to add more funds</p><br><br>';
          break;
      } 
}
?>

<!-- select coin -->

<div class="w-80 max-w-2xl mx-auto text-center">
<form action="<?php echo BASE_URL .'/src/funcs/sell.php';?>" method="post" id="formSell">
	<label for="coins" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select the coin for sell</label>
        <select id="coins" name="coin" class="bg-yellow border border-maroon text-gray-900 text-sm rounded-lg focus:ring-purple focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-purple dark:placeholder-gray-400 dark:text-purple dark:focus:ring-purple dark:focus:border-purple">
        <option selected disabled>Choose from your wallet</option>
        <option value="BTC">Bitcoin</option>
        <option value="ETH">Ethereum</option>
        <option value="LUN">LUN</option>
        <option value="DOGE">DOGE</option>
    </select>
	<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</div>




<!-- select quantity money -->
<div class="max-w-2xl mx-auto text-center">
  <p class="ml-4 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">How much do you want to sell (in €)?</p>

    	<input class="w-80 h-11 p-4 mr-0 border rounded-lg text-gray-800 border-purple bg-white" name="amount" placeholder="100€" id="amount" type="number" required/>
      <p class="font-red" id="coinavAilable"></p>
</div>




<!-- resumen -->
    <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
      <div class="rounded-lg">
        <div class="justify-between mt-6 mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start">
          <img src="../img/BTC.png" alt="product-image" class="w-full rounded-lg w-8 sm:w-40" id="img"/>
          <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
            <div class="mt-5 sm:mt-0">
              <h2 class="text-lg font-bold text-gray-900" id="coin">Bitcoin</h2>
              <p class="mt-1 text-xs text-gray-700" id="currentPrice">Current price: {0.356€}</p>
              <p class="mt-1 text-xs text-gray-700" id="quantity">Quantity: {280.898 BTC}</p>
            </div>
          </div>
        </div>

      <!-- total -->
      <div class="mt-6 mb-6 rounded-lg border bg-white p-6 shadow-md md:w-1/2grid justify-items-center">
        <div class="flex justify-between">
          <p class="text-lg font-bold">Total</p>
          <div class="">
            <p class="mb-1 text-lg font-bold" id="amountPay">€ </p>
          </div>
        </div>
        <button type="submit" class="mt-6 w-full rounded-md bg-purple py-1.5 font-medium text-blue-50 hover:bg-maroon" id="btnFormSell" onclick="confirmation(event)">Sell it</button>
      </div>
      </form>
    </div>
  </div>
</div>
  <?php
    include_once BASE_PATH.'/src/templates/components/footer.html';
?>