echo " _____ _           _   _        _____ _          _            _____     _ _    _           
/  __ \ |         | | | |      /  __ \ |        | |          |_   _|   | | |  (_)          
| /  \/ |__   ___ | |_| |_ __ _| /  \/ |__   ___| |_ __ _ _ __ | | __ _| | | ___  ___  ___ 
| |   | '_ \ / _ \| __| __/ _` | |   | '_ \ / _ \ __/ _` | '_ \| |/ _` | | |/ / |/ _ \/ __|
| \__/\ | | | (_) | |_| || (_| | \__/\ | | |  __/ || (_| | | | | | (_| | |   <| |  __/\__ \
 \____/_| |_|\___/ \__|\__\__,_|\____/_| |_|\___|\__\__,_|_| |_\_/\__,_|_|_|\_\_|\___||___/
         echo " "                                                                                  
                                                                                           "
# Get username of user
echo -n "Enter your GitHub username: "
read userName
echo " "
# Get repo of user
echo -n "Enter your GitHub repo: "
read repo
echo " "
#selection
repo="${repo}"

rm -rf ${repo}
git clone https://github.com/${userName}/${repo}.git
	cd ${repo}
#updater
echo " "
echo "Updating your USERGE-X"
git pull https://github.com/code-rgb/USERGE-X.git
git diff
git commit -m "."
git push
echo " "
echo "Success"
cd ..
rm -rf ${repo}
