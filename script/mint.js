			  var CONTRACT_ADDRESS = "0x7755eff89Db240b2Ba5d2D2e7E0F0Ef346Cda805";		
		  var CONTRACT_ABI = [
            {
                "inputs": [
                    {
                        "internalType": "string",
                        "name": "_initBaseURI",
                        "type": "string"
                    },
                    {
                        "internalType": "string",
                        "name": "_initnotRevealURI",
                        "type": "string"
                    }
                ],
                "stateMutability": "nonpayable",
                "type": "constructor"
            },
            {
                "anonymous": false,
                "inputs": [
                    {
                        "indexed": true,
                        "internalType": "address",
                        "name": "owner",
                        "type": "address"
                    },
                    {
                        "indexed": true,
                        "internalType": "address",
                        "name": "approved",
                        "type": "address"
                    },
                    {
                        "indexed": true,
                        "internalType": "uint256",
                        "name": "tokenId",
                        "type": "uint256"
                    }
                ],
                "name": "Approval",
                "type": "event"
            },
            {
                "anonymous": false,
                "inputs": [
                    {
                        "indexed": true,
                        "internalType": "address",
                        "name": "owner",
                        "type": "address"
                    },
                    {
                        "indexed": true,
                        "internalType": "address",
                        "name": "operator",
                        "type": "address"
                    },
                    {
                        "indexed": false,
                        "internalType": "bool",
                        "name": "approved",
                        "type": "bool"
                    }
                ],
                "name": "ApprovalForAll",
                "type": "event"
            },
            {
                "inputs": [
                    {
                        "internalType": "address",
                        "name": "to",
                        "type": "address"
                    },
                    {
                        "internalType": "uint256",
                        "name": "tokenId",
                        "type": "uint256"
                    }
                ],
                "name": "approve",
                "outputs": [],
                "stateMutability": "nonpayable",
                "type": "function"
            },
            {
                "inputs": [
                    {
                        "internalType": "uint256",
                        "name": "_mintAmount",
                        "type": "uint256"
                    }
                ],
                "name": "mint",
                "outputs": [],
                "stateMutability": "payable",
                "type": "function"
            },
            {
                "anonymous": false,
                "inputs": [
                    {
                        "indexed": true,
                        "internalType": "address",
                        "name": "previousOwner",
                        "type": "address"
                    },
                    {
                        "indexed": true,
                        "internalType": "address",
                        "name": "newOwner",
                        "type": "address"
                    }
                ],
                "name": "OwnershipTransferred",
                "type": "event"
            },
            {
                "inputs": [
                    {
                        "internalType": "bool",
                        "name": "_state",
                        "type": "bool"
                    }
                ],
                "name": "PauseMode",
                "outputs": [],
                "stateMutability": "nonpayable",
                "type": "function"
            },
            {
                "inputs": [
                    {
                        "internalType": "bool",
                        "name": "_state",
                        "type": "bool"
                    }
                ],
                "name": "PresalesMode",
                "outputs": [],
                "stateMutability": "nonpayable",
                "type": "function"
            },
            {
                "inputs": [],
                "name": "renounceOwnership",
                "outputs": [],
                "stateMutability": "nonpayable",
                "type": "function"
            },
            {
                "inputs": [],
                "name": "RevealMode",
                "outputs": [],
                "stateMutability": "nonpayable",
                "type": "function"
            },
            {
                "inputs": [
                    {
                        "internalType": "address",
                        "name": "from",
                        "type": "address"
                    },
                    {
                        "internalType": "address",
                        "name": "to",
                        "type": "address"
                    },
                    {
                        "internalType": "uint256",
                        "name": "tokenId",
                        "type": "uint256"
                    }
                ],
                "name": "safeTransferFrom",
                "outputs": [],
                "stateMutability": "nonpayable",
                "type": "function"
            },
            {
                "inputs": [
                    {
                        "internalType": "address",
                        "name": "from",
                        "type": "address"
                    },
                    {
                        "internalType": "address",
                        "name": "to",
                        "type": "address"
                    },
                    {
                        "internalType": "uint256",
                        "name": "tokenId",
                        "type": "uint256"
                    },
                    {
                        "internalType": "bytes",
                        "name": "_data",
                        "type": "bytes"
                    }
                ],
                "name": "safeTransferFrom",
                "outputs": [],
                "stateMutability": "nonpayable",
                "type": "function"
            },
            {
                "inputs": [
                    {
                        "internalType": "address",
                        "name": "operator",
                        "type": "address"
                    },
                    {
                        "internalType": "bool",
                        "name": "approved",
                        "type": "bool"
                    }
                ],
                "name": "setApprovalForAll",
                "outputs": [],
                "stateMutability": "nonpayable",
                "type": "function"
            },
            {
                "inputs": [
                    {
                        "internalType": "string",
                        "name": "_newBaseURI",
                        "type": "string"
                    }
                ],
                "name": "setBaseURI",
                "outputs": [],
                "stateMutability": "nonpayable",
                "type": "function"
            },
            {
                "inputs": [
                    {
                        "internalType": "string",
                        "name": "_notRevealURI",
                        "type": "string"
                    }
                ],
                "name": "setnotRevealURI",
                "outputs": [],
                "stateMutability": "nonpayable",
                "type": "function"
            },
            {
                "inputs": [
                    {
                        "internalType": "uint256",
                        "name": "_newPrice",
                        "type": "uint256"
                    }
                ],
                "name": "setPrice",
                "outputs": [],
                "stateMutability": "nonpayable",
                "type": "function"
            },
            {
                "inputs": [
                    {
                        "internalType": "uint256",
                        "name": "_newPricePS",
                        "type": "uint256"
                    }
                ],
                "name": "setPricePS",
                "outputs": [],
                "stateMutability": "nonpayable",
                "type": "function"
            },
            {
                "anonymous": false,
                "inputs": [
                    {
                        "indexed": true,
                        "internalType": "address",
                        "name": "from",
                        "type": "address"
                    },
                    {
                        "indexed": true,
                        "internalType": "address",
                        "name": "to",
                        "type": "address"
                    },
                    {
                        "indexed": true,
                        "internalType": "uint256",
                        "name": "tokenId",
                        "type": "uint256"
                    }
                ],
                "name": "Transfer",
                "type": "event"
            },
            {
                "inputs": [
                    {
                        "internalType": "address",
                        "name": "from",
                        "type": "address"
                    },
                    {
                        "internalType": "address",
                        "name": "to",
                        "type": "address"
                    },
                    {
                        "internalType": "uint256",
                        "name": "tokenId",
                        "type": "uint256"
                    }
                ],
                "name": "transferFrom",
                "outputs": [],
                "stateMutability": "nonpayable",
                "type": "function"
            },
            {
                "inputs": [
                    {
                        "internalType": "address",
                        "name": "newOwner",
                        "type": "address"
                    }
                ],
                "name": "transferOwnership",
                "outputs": [],
                "stateMutability": "nonpayable",
                "type": "function"
            },
            {
                "inputs": [],
                "name": "withdraw",
                "outputs": [],
                "stateMutability": "payable",
                "type": "function"
            },
            {
                "inputs": [
                    {
                        "internalType": "address",
                        "name": "owner",
                        "type": "address"
                    }
                ],
                "name": "balanceOf",
                "outputs": [
                    {
                        "internalType": "uint256",
                        "name": "",
                        "type": "uint256"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [],
                "name": "baseExtension",
                "outputs": [
                    {
                        "internalType": "string",
                        "name": "",
                        "type": "string"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [],
                "name": "baseURI",
                "outputs": [
                    {
                        "internalType": "string",
                        "name": "",
                        "type": "string"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [
                    {
                        "internalType": "uint256",
                        "name": "tokenId",
                        "type": "uint256"
                    }
                ],
                "name": "getApproved",
                "outputs": [
                    {
                        "internalType": "address",
                        "name": "",
                        "type": "address"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [
                    {
                        "internalType": "address",
                        "name": "owner",
                        "type": "address"
                    },
                    {
                        "internalType": "address",
                        "name": "operator",
                        "type": "address"
                    }
                ],
                "name": "isApprovedForAll",
                "outputs": [
                    {
                        "internalType": "bool",
                        "name": "",
                        "type": "bool"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [],
                "name": "isPause",
                "outputs": [
                    {
                        "internalType": "bool",
                        "name": "",
                        "type": "bool"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [],
                "name": "isPresales",
                "outputs": [
                    {
                        "internalType": "bool",
                        "name": "",
                        "type": "bool"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [],
                "name": "isReveal",
                "outputs": [
                    {
                        "internalType": "bool",
                        "name": "",
                        "type": "bool"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [],
                "name": "MaxToken",
                "outputs": [
                    {
                        "internalType": "uint256",
                        "name": "",
                        "type": "uint256"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [],
                "name": "name",
                "outputs": [
                    {
                        "internalType": "string",
                        "name": "",
                        "type": "string"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [],
                "name": "notRevealURI",
                "outputs": [
                    {
                        "internalType": "string",
                        "name": "",
                        "type": "string"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [],
                "name": "owner",
                "outputs": [
                    {
                        "internalType": "address",
                        "name": "",
                        "type": "address"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [
                    {
                        "internalType": "uint256",
                        "name": "tokenId",
                        "type": "uint256"
                    }
                ],
                "name": "ownerOf",
                "outputs": [
                    {
                        "internalType": "address",
                        "name": "",
                        "type": "address"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [],
                "name": "Price",
                "outputs": [
                    {
                        "internalType": "uint256",
                        "name": "",
                        "type": "uint256"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [],
                "name": "PricePS",
                "outputs": [
                    {
                        "internalType": "uint256",
                        "name": "",
                        "type": "uint256"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [
                    {
                        "internalType": "bytes4",
                        "name": "interfaceId",
                        "type": "bytes4"
                    }
                ],
                "name": "supportsInterface",
                "outputs": [
                    {
                        "internalType": "bool",
                        "name": "",
                        "type": "bool"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [],
                "name": "symbol",
                "outputs": [
                    {
                        "internalType": "string",
                        "name": "",
                        "type": "string"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [
                    {
                        "internalType": "uint256",
                        "name": "index",
                        "type": "uint256"
                    }
                ],
                "name": "tokenByIndex",
                "outputs": [
                    {
                        "internalType": "uint256",
                        "name": "",
                        "type": "uint256"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [
                    {
                        "internalType": "address",
                        "name": "owner",
                        "type": "address"
                    },
                    {
                        "internalType": "uint256",
                        "name": "index",
                        "type": "uint256"
                    }
                ],
                "name": "tokenOfOwnerByIndex",
                "outputs": [
                    {
                        "internalType": "uint256",
                        "name": "",
                        "type": "uint256"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [
                    {
                        "internalType": "uint256",
                        "name": "tokenId",
                        "type": "uint256"
                    }
                ],
                "name": "tokenURI",
                "outputs": [
                    {
                        "internalType": "string",
                        "name": "",
                        "type": "string"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [],
                "name": "totalSupply",
                "outputs": [
                    {
                        "internalType": "uint256",
                        "name": "",
                        "type": "uint256"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [
                    {
                        "internalType": "address",
                        "name": "_owner",
                        "type": "address"
                    }
                ],
                "name": "walletOfOwner",
                "outputs": [
                    {
                        "internalType": "uint256[]",
                        "name": "",
                        "type": "uint256[]"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            },
            {
                "inputs": [
                    {
                        "internalType": "address",
                        "name": "",
                        "type": "address"
                    }
                ],
                "name": "WB",
                "outputs": [
                    {
                        "internalType": "uint256",
                        "name": "",
                        "type": "uint256"
                    }
                ],
                "stateMutability": "view",
                "type": "function"
            }
        ]; 

        
          var chainId;
          var web3;
          //let mintPrice = 0.05;
          var mintPriceValue;
          var maxMintQty = 3;
		  var isConnected = false;
		  var OCContract;
		  var MintedAmount;
          var isMode;
          var isBalanceAmount;
          var MaxToken;
		  const Web3Modal = window.Web3Modal.default;
		  const WalletConnectProvider = window.WalletConnectProvider.default;
	  	  let web3Modal;
	  	  let provider;	  
		  let WalletLoaded;

async function beforeT(){
    await OCContract.methods
    .Price()
    .call()
    .then((res) => {
  isPrice = (res).toString();
  console.log(isPrice);       
    if (isPrice != "80000000000000000") {
      ActualPrice = "0.04";	
      $("#val").text(ActualPrice);
    }
    else {
      ActualPrice = "0.08";	
      $("#val").text(ActualPrice);
    }
  });
} 

		  function init() {	
            const providerOptions = {
                walletconnect: {
                  package: WalletConnectProvider,
                  options: {
                    infuraId: "0427df6f5ffc4363bf8cc02503ddbb4a",
                  },
                },
              };
				  web3Modal = new Web3Modal({
					  cacheProvider: false,
                      providerOptions,
					  disableInjectedProvider: false,
				  });

			  $("#mintBtn").click(async function (e) {				
				  e.preventDefault();
				  let qty = parseInt($("#MintValue").val());		
				  let mintValue = ethers.utils.parseEther(qty.toString()) * mintPriceValue;		
				  if (isConnected) {                  
                  await OCContract.methods
                  .balanceOf(WalletLoaded.toString())
                  .call()
                  .then((res) => {
                        
                  isBalanceAmount = (res).toString();
                  //console.log(isBalanceAmount);                       
                  });

                  const num1 = parseInt(qty);
                  const num2 = parseInt(isBalanceAmount);
                  const BalancePlusMint = num1 + num2;
                  //console.log("BalancePlusMint", BalancePlusMint);
                  const BalanceCanMinted = 3 - isBalanceAmount;
                  //console.log("BalanceCanMinted", BalanceCanMinted);

                    if (isBalanceAmount == "3") {
                    Swal.fire({
                        title: "Max NFT Reached!",
                        text: 'Thank you for supporting us',
                        icon: "error"});
                    }

                    else if (BalancePlusMint > "3") {
                        Swal.fire({
                        title: "Quantity Limit",
                        text: 'You are trying to mint to much NFTs. You can mint more ' + BalanceCanMinted + ' NFTs.',
                        icon: "error"});
                    }
                    else {
				  Swal.fire({
				  title: 'Minting NFT',
				  html: 'Please wait...',
				  timerProgressBar: true,
				  allowOutsideClick: false,
				  didOpen: () => {
					  Swal.showLoading()
					  const b = Swal.getHtmlContainer().querySelector('b')}})
                      OCContract = new web3.eth.Contract(CONTRACT_ABI, CONTRACT_ADDRESS);
                      OCContract.methods
                      .mint(qty)
                      .send({ from: WalletLoaded, value: mintValue })
                      .then((res) =>                             
                      {{
                      Swal.fire( 'Token minted!', 'Look what you got in OpenSea!', 'success' ) 
                      }}
                      ).catch(function (e) {
                      {
                      Swal.fire({icon: 'error', title: 'Oops...', text: 'Something is wrong' })
                      }
                      })}} 
                      else {
                      Swal.fire({
                          title: "Please Connect Wallet!",
                          icon: "error",
                          });                             
                      }
                      });
	  
					  $("#plusBtn").click(async function () {
						  let qty = parseInt($("#MintValue").val());			
						  qty = isNaN(qty) ? 0 : qty;
						  if (qty < maxMintQty) {
							  qty++;
							  document.getElementById("MintValue").value = qty;
							  await updateTotalValue();
						  }});
			  
					  $("#minusBtn").click(async function () {
						  var value = parseInt($("#MintValue").val());
						  value = isNaN(value) ? 0 : value;
						  if (value > 1) {
							  value--;
							  document.getElementById("MintValue").value = value;
							  await updateTotalValue();
						  }});
					  }
	  
		  async function updateTotalValue() {
			  var mul = parseInt($("#MintValue").val());
			  var totalPrice = (mul * mintPriceValue).toFixed(2);
			  document.getElementById("val").innerHTML = totalPrice;
		  }
			  
		  async function fetchAccountData() {
			  web3 = new Web3(provider);	
			  const accounts = await web3.eth.getAccounts();	
			  chainId = await web3.eth.getChainId();
			  if (chainId === 4) {
			  OCContract = new web3.eth.Contract(
				  CONTRACT_ABI,
				  CONTRACT_ADDRESS
			  );
	  
			  isConnected = true;
              document.getElementById('HideBeforeOnline').style.display = "block";  
              document.getElementById('HideBConnect').style.display = "block";              
              document.getElementById('HideAfterOnline').style.display = "none";  
              document.getElementById('HideAConnect').style.display = "none";  

              await OCContract.methods
				  .isPresales()
				  .call()
				  .then((res) => {
				isMode = (res).toString();
              //  console.log(isMode);       
                  if (isMode != "true") {
                    ActualMode = "Public Sale - 0.08 ETH";	
                    $("#ActualMode").text(ActualMode);
                    mintPriceValue = 0.08;
                    ActualPrice = "0.08";	
                    $("#val").text(ActualPrice);
                  }
                  else if (isMode != "false") {
                    ActualMode = "Presale - 0.04 ETH";	
                    $("#ActualMode").text(ActualMode);
                    mintPriceValue = 0.04;
                    ActualPrice = "0.04";	
                    $("#val").text(ActualPrice);
                  }
                });
                
			  await OCContract.methods
				  .totalSupply()
				  .call()
				  .then((res) => {     
				  MintedAmount = res;	
				  $("#RangeValue").text(MintedAmount);
				  });

                  await OCContract.methods
				  .MaxToken()
				  .call()
				  .then((res) => {
                    MaxToken = res;	
				  $("#MaxToken").text(MaxToken);
				  });
	  
			  WalletLoaded = accounts[0];	
			  Swal.fire({
				  title: "Wallet Connected!",
				  icon: "success"});	
			  let start = accounts[0].slice(0, 15);
			  let end = accounts[0].slice(37, 42);
			  $("#WalletConnectBtn").text(start + "..." + end);
			  } else {
                Swal.fire({
				  title: "Please Switch network to Rinkeby!",
				  icon: "error"});
			  }
		  }
	  
		  async function refreshAccountData() {
			  await fetchAccountData(provider);
		  }
  
		  async function getData() {
			  console.log("get data function");
		  }
  
		  async function onConnect() {
			  try { provider = await web3Modal.connect();
			  } catch (e) { console.log("Cant connect wallet", e);
			  return;			
			  }	
			  provider.on("accountsChanged", (accounts) => {
			  fetchAccountData();
			  });	
			  provider.on("chainChanged", (chainId) => {
			  fetchAccountData();
			  });	
			  provider.on("networkChanged", (networkId) => {
			  fetchAccountData();
			  });	
			  await refreshAccountData();
		  }
	  
		  async function onDisconnect() {
			  if (provider.close) {
			  await provider.close();
			  await web3Modal.clearCachedProvider();
			  provider = null;
			  }
			  WalletLoaded = null;			
		  }
  
		  window.addEventListener("load", async () => {
			  await init();
			  document
			  .querySelector("#WalletConnectBtn")
			  .addEventListener("click", onConnect);
		  });				
