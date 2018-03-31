#!/usr/bin/env python

from pymongo import MongoClient
import sys

email = sys.argv[1]
product_name = sysargv[2]
product_price = sysargv[3]

client = MongoClient('localhost',27017)
db = client.bluehalo

template = {
				"email": email,
				"name": product_name,
				"price": product_price
			}

db.cart.insert{template}