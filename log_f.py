import logging
import sys
import subprocess



x=sys.argv[1]
dict = {'username':x}

logging.basicConfig(level=logging.CRITICAL, filename="critical1.log", filemode="a",
                    format = '%(asctime)s : %(username)s : %(levelname)s : %(message)s ')
                    

logger = logging.getLogger(__name__)
syslog = logging.StreamHandler()
handler = logging.FileHandler('ctitical.log')
formatter = logging.Formatter('%(asctime)s -%(username)s - %(levelname)s - %(message)s ')
syslog.setFormatter(formatter)
logger.setLevel(logging.CRITICAL)
logger.addHandler(syslog)
logger.addHandler(handler)

logger = logging.LoggerAdapter(logger, dict)
logger.critical("Invalid login attempt")



# Run the other script
subprocess.Popen(["python", "log_a.py"], shell=True)
