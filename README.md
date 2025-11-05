# Live auction

This platform will provide functionality for a live auction platform. On this platform users can bid in real-time on items while the auction timer is running.  
Item listings are created by an admin as is the scheduling of auction timers.  
The platform provides browser and email notifications on status updates.  
The platform functionality is exposed by a REST API to allow flexibility in client solutions.  
A fully functional web client will be provided for this platform.

## Features

| Implemented (🟥/🟩) | Feature                                                                                                                     | Tools                                                                     |
| ------------------- | --------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------- |
| 🟥                  | [User Registration and Authentication](https://github.com/users/JohnnyDeeee/projects/4/views/1?pane=issue&itemId=137427090) | Laravel Breeze/Jetstream or Sanctum for API token auth                    |
| 🟥                  | [Item Listings with Categories ](https://github.com/users/JohnnyDeeee/projects/4/views/1?pane=issue&itemId=137427133)       | Eloquent ORM relationships, database migrations                           |
| 🟥                  | [Real-Time Bidding System ](https://github.com/users/JohnnyDeeee/projects/4/views/1?pane=issue&itemId=137427192)            | Laravel Echo, broadcasting with WebSockets (Pusher or Laravel WebSockets) |
| 🟥                  | [Auction Timer and Status Updates ](https://github.com/users/JohnnyDeeee/projects/4/views/1?pane=issue&itemId=137427234)    | Task scheduling with Laravel Scheduler, queue jobs for closing auctions   |
| 🟥                  | [Bid History Tracking ](https://github.com/users/JohnnyDeeee/projects/4/views/1?pane=issue&itemId=137427269)                | Eloquent ORM, database transactions for bid integrity                     |
| 🟥                  | [Notifications ](https://github.com/users/JohnnyDeeee/projects/4/views/1?pane=issue&itemId=137427321)                       | Email notifications with Laravel Mail, real-time UI alerts                |
| 🟥                  | [User Watchlist & Alerts ](https://github.com/users/JohnnyDeeee/projects/4/views/1?pane=issue&itemId=137427365)             | Many-to-many relationships, notifications queue                           |
| 🟥                  | [Admin Dashboard for Monitoring ](https://github.com/users/JohnnyDeeee/projects/4/views/1?pane=issue&itemId=137427400)      | Authorization policies, middleware, resource controllers                  |
| 🟥                  | REST API for Mobile Clients                                                                                                 | API Resources, Sanctum or Passport authentication                         |
