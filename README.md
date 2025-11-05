# Live auction

This platform will provide functionality for a live auction platform. On this platform users can bid in real-time on items while the auction timer is running.  
Item listings are created by an admin as is the scheduling of auction timers.  
The platform provides browser and email notifications on status updates.  
The platform functionality is exposed by a REST API to allow flexibility in client solutions.  
A fully functional web client will be provided for this platform.

## Features

| Implemented (🟥/🟩) | Feature                              | Tools                                                                     |
| ------------------- | ------------------------------------ | ------------------------------------------------------------------------- |
| 🟥                  | User Registration and Authentication | Laravel Breeze/Jetstream or Sanctum for API token auth                    |
| 🟥                  | Item Listings with Categories        | Eloquent ORM relationships, database migrations                           |
| 🟥                  | Real-Time Bidding System             | Laravel Echo, broadcasting with WebSockets (Pusher or Laravel WebSockets) |
| 🟥                  | Auction Timer and Status Updates     | Task scheduling with Laravel Scheduler, queue jobs for closing auctions   |
| 🟥                  | Bid History Tracking                 | Eloquent ORM, database transactions for bid integrity                     |
| 🟥                  | Notifications                        | Email notifications with Laravel Mail, real-time UI alerts                |
| 🟥                  | User Watchlist & Alerts              | Many-to-many relationships, notifications queue                           |
| 🟥                  | Admin Dashboard for Monitoring       | Authorization policies, middleware, resource controllers                  |
| 🟥                  | REST API for Mobile Clients          | API Resources, Sanctum or Passport authentication                         |

### User Registration and Authentication

Users need to be able to register an account, so that they can bid on items.  
After registration a user needs to be able to authenticate, so we can log it into the right account.

MVP

-   Login page with username and password field and submit button
-   Logout button which will end your session and invalidates your api token

Extra

-   "Remember me" checkbox on login page for faster login
-   Session timeouts (invalidate session/token after X minutes of inactivity)
-   2 Factor authentication

### Item Listings with Categories

There should be a page where users can view the items that are listed, so that they can bid on them.  
The items should be grouped/filtered by categories, so that they can be easily found by users.

MVP

-   A page that shows all items
-   An item consists of:
    -   Title
    -   Image (optional?)
    -   Description
    -   Categories (tags)
-   User should be able to filter listings by tags

Extra

-   Filter by Title

### Real-Time Bidding System

A user should be able to bid on an item listing, so that they can (potentially) win the bidding and thus purchase the item.

MVP

-   Item listings should contain:
    -   Open for bids (yes/no)
    -   A timer for how long the item is open for bids
    -   Bid an amount (if open for bids)
-   You can bid only once as long as your bid has not been outbid
-   When the timer runs out the last highest bid is accepted

Extra

-   Filter by "open for bids"

### Auction Timer and Status Updates

A user should see the timer on a item listing, so that they will know when they can bid and when bidding is closed.  
A user should receive status updates on item listings, so that they will know when:

-   bidding started
-   they are outbid and can bid again
-   bidding has closed

MVP

-   Show the different item status to the user:
    -   Bidding started
    -   Outbid
    -   Bidding closed
-   Show the time until the bidding is closed

Extra

-   ...

### Bid History Tracking

A user should be able to see all bids that are made on an item, so that they can verify what bids have been made
(or should we turn this into the history of your own bids?)

MVP

-   TBD

### Notifications

A user should receive email and browser notifications of status updates, so that they don't have to be on the webpage to receive updates.

MVP

-   Email and browser notification on:
    -   Winning a bidding
    -   Losing a bidding that you have bid on
    -   Being outbid

Extra

-   ...

### User Watchlist & Alerts

A user should be able to add items to a watchlist, so that they can receive updates on items they have not bid on.

MVP

-   Add item listings to a watchlist
-   Configure alerts (email/browser notifications) for a watchlist
    -   Open for bidding
    -   Closed for bidding (without having placed a bid)
    -   Each new bid

Extra

-   ...

### Admin Dashboard for Monitoring

An admin needs to be able to see and delete bids from an item listing, in case of invalid bids.  
An admin needs to be able to see, create, edit and delete item listings, in case of invalid item listings.
An admin needs to be able to schedule an auction timer on an item listing, so that this can start automatically in the future.

MVP

-   Admin protected page that shows:
    -   Item listings
        -   View listing
        -   Create listing
        -   Edit listing
        -   Delete listing
        -   Schedule the auction timer for this listing
        -   Edit/Remove the schedule auction timer
    -   Bids
        -   View bid
        -   Delete bid

Extra

-   Edit the time left on an already running auction timer

### REST API for Mobile Clients

All the functionality should be exposed by a REST API, so that clients for other devices can be created.
