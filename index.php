<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamer's Paradise</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
      <script>
    async function handleDeposit() {
        const amount = document.getElementById('amount').value;
        const requestId = `${Date.now()}-${Math.floor(Math.random() * 1000)}`;
        const apiKey = 'api_key_41106947-dfb3-43d8-a123-b18391d574c0';
        const apiSecret = '3039ce39-df04-4b9e-a6e4-82fe695f1a36

';

        if (amount) {
            try {
                const response = await fetch('http://192.168.18.239:3000/api/p2p/initiate', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'apiKey': apiKey,
                        'apiSecret': apiSecret
                    },
                    body: JSON.stringify({ amount, requestId })
                });

                const result = await response.json();
                console.log(result)

                if (response.ok) {
                    // Check if transaction was successful and has a payment link
                    if (result.status == 200 && result.data.paymentLink) {
                        window.location.href = result.data.paymentLink;
                        window.open(result.data.paymentLink, '_blank');
                    } else {
                        alert(`Error: ${result.message}`);
                    }
                } else {
                    alert(`Error: ${result.message}`);
                }
            } catch (error) {
                alert('An error occurred while initiating the deposit.');
            }

            // Hide the modal after attempting to process
            document.getElementById('deposit-modal').classList.add('hidden');
        } else {
            alert('Please enter an amount.');
        }
    }
</script>
</head>
<body class="bg-gray-900 text-white">
    <nav class="bg-gray-800 py-4">
        <div class="container mx-auto flex justify-end px-4">
            <div class="flex items-center space-x-4">
                <!-- Wallet Balance -->
                <div class="bg-gray-700 px-4 py-2 rounded-lg shadow-md">
                    <h4 class="text-sm font-semibold">Wallet Balance</h4>
                    <p class="text-xl font-bold">₹1500</p>
                </div>

                <!-- Deposit and Withdraw Buttons -->
                <div class="flex space-x-2">
                    <button
                        class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-full shadow-md"
                        onclick="document.getElementById('deposit-modal').classList.remove('hidden')"
                    >
                        Deposit
                    </button>
                    <button
                        class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded-full shadow-md"
                    >
                        Withdraw
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex-1 p-8 md:p-12">
        <!-- Hero Section -->
        <div class="text-center mt-10 max-w-4xl mx-auto">
            <h1 class="text-5xl font-extrabold text-white">
                Welcome to Gamer's Paradise
            </h1>
            <p class="text-lg font-light mt-4">
                Dive into the ultimate gaming experience! Get started now with secure deposits, fast transactions, and a world of rewards. You're just a step away from leveling up your gaming journey.
            </p>

            <!-- Deposit Form -->
            <div id="deposit-modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-60 z-50 hidden">
                <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-md relative">
                    <h2 class="text-3xl font-bold text-gray-100 mb-6">Make a Deposit</h2>
                    <div class="space-y-6">
                        <div>
                            <label for="amount" class="text-sm font-medium text-gray-200">Enter Amount</label>
                            <input
                                id="amount"
                                type="number"
                                placeholder="Enter amount"
                                class="w-full mt-2 px-4 py-3 bg-gray-700 text-white border-none rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                            />
                        </div>
                        <div class="flex justify-center">
                            <button
                                class="bg-blue-600 hover:bg-blue-700 px-8 py-4 text-lg font-bold rounded-full"
                                onclick="handleDeposit()"
                            >
                                Pay Now
                            </button>
                        </div>
                    </div>
                    <button
                        class="absolute top-2 right-2 text-gray-400 hover:text-white"
                        onclick="document.getElementById('deposit-modal').classList.add('hidden')"
                    >
                        ✕
                    </button>
                </div>
            </div>

            <!-- Features Section -->
            <div class="mt-20 max-w-7xl mx-auto text-center space-y-8">
                <h2 class="text-4xl font-bold text-white">Key Features</h2>
                <div class="flex flex-wrap justify-center gap-8">
                    <div class="w-64 p-6 bg-gray-800 bg-opacity-80 rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:scale-105">
                        <div class="text-5xl">⚡</div>
                        <h3 class="mt-4 text-xl font-bold text-white">Fast Transactions</h3>
                        <p class="mt-2 text-gray-300">Experience super fast payments and instant deposits.</p>
                    </div>
                    <div class="w-64 p-6 bg-gray-800 bg-opacity-80 rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:scale-105">
                        <div class="text-5xl">🔒</div>
                        <h3 class="mt-4 text-xl font-bold text-white">Secure Payments</h3>
                        <p class="mt-2 text-gray-300">Your transactions are encrypted with top-level security.</p>
                    </div>
                    <div class="w-64 p-6 bg-gray-800 bg-opacity-80 rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:scale-105">
                        <div class="text-5xl">🎁</div>
                        <h3 class="mt-4 text-xl font-bold text-white">Exclusive Rewards</h3>
                        <p class="mt-2 text-gray-300">Earn rewards and bonuses as you play and deposit.</p>
                    </div>
                </div>
            </div>

            <!-- Game of the Week Section -->
            <div class="mt-20 max-w-7xl mx-auto text-center space-y-8">
                <h2 class="text-4xl font-bold text-white">Game of the Week</h2>
                <div class="flex flex-wrap justify-center gap-8">
                    <div class="w-80 p-6 bg-gray-800 bg-opacity-80 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold text-white">Epic Battle Royale</h3>
                        <p class="mt-4 text-gray-300">Join the ultimate battle for survival. Fight, strategize, and emerge as the last one standing in this thrilling game.</p>
                        <button class="mt-6 bg-blue-600 hover:bg-blue-700 px-4 py-2 text-lg font-bold rounded-full">Play Now</button>
                    </div>
                </div>
            </div>

            <!-- Community Events Section -->
            <div class="mt-20 max-w-7xl mx-auto text-center space-y-8">
                <h2 class="text-4xl font-bold text-white">Community Events</h2>
                <div class="flex flex-wrap justify-center gap-8">
                    <div class="w-80 p-6 bg-gray-800 bg-opacity-80 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold text-white">Monthly Tournaments</h3>
                        <p class="mt-4 text-gray-300">Participate in our monthly tournaments to win amazing prizes and showcase your skills.</p>
                        <button class="mt-6 bg-blue-600 hover:bg-blue-700 px-4 py-2 text-lg font-bold rounded-full">Join Now</button>
                    </div>
                    <div class="w-80 p-6 bg-gray-800 bg-opacity-80 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold text-white">Live Streaming Events</h3>
                        <p class="mt-4 text-gray-300">Catch live streams of top gamers and special events. Don't miss out on the action!</p>
                        <button class="mt-6 bg-blue-600 hover:bg-blue-700 px-4 py-2 text-lg font-bold rounded-full">Watch Live</button>
                    </div>
                </div>
            </div>

            <!-- Testimonials Section -->
            <div class="mt-20 max-w-7xl mx-auto text-center space-y-8">
                <h2 class="text-4xl font-bold text-white">What Our Players Say</h2>
                <div class="flex flex-wrap justify-center gap-8">
                    <div class="w-80 p-6 bg-gray-800 bg-opacity-70 rounded-lg shadow-lg">
                        <p class="text-lg text-gray-300">"Gamer's Paradise changed my gaming experience. The deposits are fast, and the rewards are amazing!"</p>
                        <p class="mt-4 text-right text-white font-bold">- John Doe</p>
                    </div>
                    <div class="w-80 p-6 bg-gray-800 bg-opacity-70 rounded-lg shadow-lg">
                        <p class="text-lg text-gray-300">"I love the secure transactions and the exclusive bonuses. This is the best gaming platform I've used."</p>
                        <p class="mt-4 text-right text-white font-bold">- Jane Smith</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 py-6">
        <div class="container mx-auto text-center text-gray-400">
            <p>&copy; 2024 Gamer's Paradise. All rights reserved.</p>
            <div class="mt-4 flex justify-center space-x-4">
                <a href="#" class="hover:text-white">Privacy Policy</a>
                <a href="#" class="hover:text-white">Terms of Service</a>
                <a href="#" class="hover:text-white">Support</a>
            </div>
        </div>
    </footer>



</body>
</html>
