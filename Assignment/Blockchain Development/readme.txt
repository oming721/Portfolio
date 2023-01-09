This project devide to two main file : AccManage & TransacationProcess
---------------------------------------------------------------------------------------
AccManage is the file to this system to manage account
Function : 1)Login
           2)Registration

1)Login is login based on the account at file acc/Acc.txt
2)Registration is when users register to this system, the user ID will 
  be symmetrical in order to make public and private keys for each user. 
  Symmetric user ID can be checked by user ID by using the file acc/Acc.txt


TransactionProcess is use the dummy data to run the data to the block chain
At main file of TransactionProcess required to key in symmetric userid to proceed
the encrypt and decrypt process

-----------------------------------------------------------------------------------------

Acc File - Record the user public and private key
	 - All the user transaction ledger is recorder at here
	 - The entire of account information is recorder at Acc.txt

ledger.txt - All the transaction will be store at here by using form of blockchain
	   - The first block is use genies block store the digital signature of user


Dummy Transaction - The data that need to store in blockchain is at here
		    included pick up point, drop off point, date, payment, payment status

-----------------------------------------------------------------------------------------
