<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/book-ticket-stylesheet.css">
</head>

<body>
    <div class="heading">
        <h1><b>Book your ticket here!</b></h1>
    </div>

    <form method="post">
        <div class="user-input">

            <div class="User-name">
                <div class="fn">
                    <label for="fn">First Name</label>
                    <br>
                    <input type="text" name="firstName" id="fn" required autofocus placeholder="Enter your First name "
                        maxlength="20">
                </div>

                <div class="ln">
                    <label for="ln">Last Name</label>
                    <br>
                    <input type="text" name="lastName" id="ln" required placeholder="Enter your Last name"
                        maxlength="20">
                </div>

            </div>

            <div class="Email-and-phoneNumber">
                <div class="email">
                    <label for="mail">Email</label>
                    <br>
                    <input type="email" name="email" id="mail" required placeholder="Enter your E-mail" maxlength="40">
                </div>

                <div class="number">
                    <!-- Change the number thing in css -->
                    <label for="pn"> Phone Number</label>
                    <br>
                    <input type="number" name="pn" id="pn" required placeholder="Enter your number" maxlength="15">
                </div>

            </div>

            <div class="city-and-address">
                <div class="city">
                    <label for="city">City</label>
                    <br>
                    <input type="text" name="city" id="city" placeholder="ex: Nasr-city" maxlength="20">
                </div>

                <div class="address">
                    <label for="address"> Address</label>
                    <br>
                    <input type="text" name="address" id="address" required placeholder="Enter your addres"
                        maxlength="100">
                </div>
            </div>


            <hr>


            <div class="radio-buuton-header">
                <p class="p2"><b>Trip Details</b></p>
            </div>

            <!-- If ther's time handle the select statment Deleting 
                an option when it's choosed in the other select in the backend -->

            <div class="sourceStation-and-destinationStaion">

                <div class="source">
                    <label for="source">Source Station</label>
                    <br>
                    <select name="sourceStation" id="source" required>

                        <optgroup label="From Cairo">
                            <option value="station1">Ramses Station </option>
                            <option value="station2">Attaba</option>
                            <option value="station3">Orabi</option>
                        </optgroup>

                        <optgroup label="From alexanderia">
                            <option value="station4">Sidi Gaber Railway Station</option>
                            <option value="station5">El Sook Train Station</option>
                            <option value="station6">El Hadra El Baharia Train Station</option>
                        </optgroup>

                        <optgroup label="From Sahel">
                            <option value="station7">El Rokab El Bahareya Station</option>
                            <option value="station8">El Metras Station</option>
                            <option value="station9">El Rasafa Metro Stration</option>
                        </optgroup>

                        <optgroup label="From Dahab">
                            <option value="station10">Nuweibaa Station</option>
                            <option value="station11">Dar dahab Station</option>
                            <option value="station12">Abou galom Station</option>
                        </optgroup>

                        <optgroup label="From Tanta">
                            <option value="station4">Kafr El Sheikh Selim Train Station</option>
                            <option value="station5">Quesna Train Station</option>
                            <option value="station6">Manshyet El-Bakry Train Station</option>
                        </optgroup>

                    </select>
                </div>

                <div class="destination">
                    <label for="destination">Destination Station</label>
                    <br>
                    <select name="destinationStation" id="destination" required >

                        <optgroup label="To Cairo">
                            <option value="station1">Ramses Station </option>
                            <option value="station2">Attaba Staion</option>
                            <option value="station3">Orabi Station</option>
                        </optgroup>

                        <optgroup label="To alexanderia">
                            <option value="station4">Sidi Gaber Railway Station</option>
                            <option value="station5">El Sook Station</option>
                            <option value="station6">El Hadra El Baharia Station</option>
                        </optgroup>

                        <optgroup label="To Sahel">
                            <option value="station7">El Rokab El Bahareya Station</option>
                            <option value="station8">El Metras Station</option>
                            <option value="station9">El Rasafa Metro Stration</option>
                        </optgroup>

                        <optgroup label="To Dahab">
                            <option value="station10">Nuweibaa Station</option>
                            <option value="station11">Dar dahab Station</option>
                            <option value="station12">Abou galom Station</option>
                        </optgroup>

                        <optgroup label="To Tanta">
                            <option value="station4">Kafr El Sheikh Selim Station</option>
                            <option value="station5">Quesna Station</option>
                            <option value="station6">Manshyet El-Bakry Station</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="date-and-time">
                <div class="date">
                    <label for="date">Date</label>
                    <br>
                    <input type="date" id="date" required>
                </div>

                <div class="time">
                    <label for="time">Time</label>
                    <br>
                    <input type="time" id="time" required>
                </div>
            </div>

            <div class="oneWay-twoWay">
                <input id="oneWay" type="radio" value="trip" name="way" required>
                <label for="oneWay">One way trip</label>

                <br>

                <input id="twoWay" type="radio" value="trip" name="way" required>
                <label for="twoWay">Two way trip</label>
            </div>
            <div class="firstClass-secondClass">
                <input id="firstClass" type="radio" value="classLevel" name="class" required>
                <label for="firstClass">1st - Class Carriage</label>

                <br>

                <input id="secondClass" type="radio" value="classLevel" name="class" required>
                <label for="secondClass">2nd - Class Carriage</label>
            </div>



            <div class="no-of-tickets">
                <label for="noTickets">Enter the number of tickets: </label>
                <input id="noTickets" type="number" max="20" min="1" step="1" value="1">
            </div>

            <div class="submit-and-reset">
                <input type="submit" value="Book Now" id="submit">

                <!-- <input type="reset" value="Reset" id="reset"> -->
            </div>


        </div>


    </form>
</body>

</html>