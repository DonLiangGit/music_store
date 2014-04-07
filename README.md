music_store
===========

grad project for Database course

Tables:

Artists (artist_name, password, registered_date, email, account_number )
Artists Account (account_number, artist_name) 
Customers (customer_ID, name, password, registered_date, email )
Customers Account (account_number, customer_ID) 
Account (account_number, type, balance, address, security questions) 
Products (product_ID, title, rating, description, price, album ) (modified)
Product_file(title, music_file_path) (added)
Album (album, year, genre, music_image_path ) 
Comment (comment_ID, name, email, description )  
Shopping Cart (cart_ID, customer_ID, total_price )
Order (order_ID, date, order_total_price, status, cart_ID ) (modified)
Payment (payment_ID, date,
artist_account_type, customer_account_type, artist_account_number, customer_account_number, customer_ID, order_ID ) 
Artist_Album(album, artist_name)
Artists_Edit_Music (artist_name, title)
Make_Comment (customer_ID, comment_ID)
