<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NPS Feedback Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .emoji-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
            gap: 10px; /* Adds space between emojis */
        }
        .emoji-item {
            cursor: pointer;
            font-size: 2rem; /* Adjust size for smaller screens */
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            transition: transform 0.2s, border-color 0.2s, background-color 0.2s;
            text-align: center; /* Center text within emoji */
        }
        .emoji-item:hover {
            transform: scale(1.1);
        }
        /* Color coding */
        .emoji-item[data-value="0"]
		{
			
            background-color: #ff0000; /* Light dark red */
           border-color: #004d00; /* Dark green */
			color: white;
        
		}
        .emoji-item[data-value="1"]
		{
		    background-color: #ff1a1a; /* Light dark red */
            border-color: #004d00; /* Dark green */
			color: white;	
		}
        .emoji-item[data-value="2"]
		{
			background-color: #ff3333; /* Light dark red */
            border-color: #004d00; /* Dark green */
			color: white;
		}
		
        .emoji-item[data-value="3"]
	    {
		    background-color: #ff4d4d; /* Light dark red */
            border-color: #004d00; /* Dark green */
			color: white;
	    }
        .emoji-item[data-value="4"]
		{
		    background-color: #ff6666; /* Light dark red */
            border-color: #004d00; /* Dark green */
			color: white;
	    }
        .emoji-item[data-value="5"]
		{
		    background-color: #ff8080; /* Light dark red */
            border-color: #004d00; /* Dark green */
			color: white;
	    }
        .emoji-item[data-value="6"]
		{
		    background-color: #ff9999; /* Light dark red */
            border-color: #004d00; /* Dark green */
			color: white;
	    }
        .emoji-item[data-value="7"]
		{
		    background-color: #ffcccc; /* Light dark red */
            border-color: #004d00; /* Dark green */
			color: white;
	    }
        .emoji-item[data-value="8"] 
		{
            background-color: #ffcccc; /* Light pink */
            border-color: #004d00; /* Dark green */
        }
        .emoji-item[data-value="9"] 
		{
            background-color: #228B22; /* Light green */
            border-color: #004d00; /* Dark green */
        }
        .emoji-item[data-value="10"] 
		{
            background-color: #008000; /* Dark green */
            border-color: #004d00; /* Dark green */
            color: white;
        }
        .selected {
            border-color: yellow;
            background-color: yellow; /* Light blue to highlight selected item */
        }
        .hidden {
            display: none;
        }

        /* Responsive design adjustments */
        @media (max-width: 576px) {
            .emoji-item {
                font-size: 1.5rem; /* Smaller emoji size on small screens */
                padding: 8px;
            }
        }
        @media (min-width: 577px) and (max-width: 768px) {
            .emoji-item {
                font-size: 1.75rem; /* Medium emoji size on medium screens */
                padding: 10px;
            }
        }
        @media (min-width: 769px) {
            .emoji-item {
                font-size: 2rem; /* Larger emoji size on large screens */
                padding: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        
        <form id="npsForm" action="process.php" method="post">
            <!-- NPS Rating -->
            <div class="form-group">
                <label for="npsRating">Based on this transaction, How likely are you to recommend us on a scale from 0 to 10?</label>
                <div id="emojiList" class="emoji-list">
                    <!-- Emoji items from 0 to 10 -->
                    <span class="emoji-item" data-value="0">😠 </br> 0</span>
                    <span class="emoji-item" data-value="1">😡 </br>1</span>
                    <span class="emoji-item" data-value="2">😞 </br>2</span>
                    <span class="emoji-item" data-value="3">🙁 </br>3</span>
                    <span class="emoji-item" data-value="4">😟 </br>4</span>
                    <span class="emoji-item" data-value="5">😐 </br>5</span>
                    <span class="emoji-item" data-value="6">😕 </br>6</span>
                    <span class="emoji-item" data-value="7">😊 </br>7</span>
                    <span class="emoji-item" data-value="8">😃 </br>8</span>
                    <span class="emoji-item" data-value="9">😁 </br>9</span>
                    <span class="emoji-item" data-value="10">🥳 </br>10</span>
                </div>
                <input type="hidden" id="npsRating" name="npsRating" required>
            </div>

            <!-- Additional Feedback -->
            <div id="feedbackFields" class="hidden">
                <h4 class="mt-4">Please provide feedback on the following areas:</h4>
                <div class="form-group">
                    <label><input type="checkbox" name="feedbackAreas[]" value="Communication"> Communication</label>
                </div>
                <div class="form-group">
                    <label><input type="checkbox" name="feedbackAreas[]" value="Application form"> Application form</label>
                </div>
                <div class="form-group">
                    <label><input type="checkbox" name="feedbackAreas[]" value="Payment options"> Payment options</label>
                </div>
                <div class="form-group">
                    <label><input type="checkbox" name="feedbackAreas[]" value="Counselling"> Counselling</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.querySelectorAll('.emoji-item').forEach(function(item) {
            item.addEventListener('click', function() {
                var value = this.getAttribute('data-value');
                document.getElementById('npsRating').value = value;

                // Remove 'selected' class from all items
                document.querySelectorAll('.emoji-item').forEach(function(emoji) {
                    emoji.classList.remove('selected');
                });

                // Add 'selected' class to the clicked item
                this.classList.add('selected');
                
                // Show additional feedback fields
                document.getElementById('feedbackFields').classList.remove('hidden');
            });
        });
    </script>
</body>
</html>
