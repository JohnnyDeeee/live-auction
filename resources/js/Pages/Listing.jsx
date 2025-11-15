import { Card, CardContent, Chip, Stack, Typography } from '@mui/material';
import React from 'react';

export default function Listing({ title, description, image_url, tags }) {
    return (
        <Card variant="outlined" className="mt-5 flex flex-col">
            <CardContent className="flex flex-grow flex-col">
                <Stack direction={'row'}>
                    <img src={image_url} width={250} />
                    <div className="w-full content-center text-center">
                        <Typography
                            variant="h1"
                            className="px-5 text-2xl first-letter:capitalize"
                        >
                            {title}
                        </Typography>
                    </div>
                </Stack>
                <div className="flex flex-grow flex-col">
                    <div className="pb-3 pt-3">
                        <Typography variant="body1" className="line-clamp-5">
                            {description.split('\\n').map((line, index) => (
                                <React.Fragment key={index}>
                                    {line}
                                    <br />
                                </React.Fragment>
                            ))}
                        </Typography>
                    </div>
                    <div className="flex flex-grow flex-wrap" /*items-center"*/>
                        {tags.map((tag) => (
                            <Chip
                                label={tag.name}
                                key={tag.name}
                                className="m-1 text-xs"
                                // slotProps={{
                                //     label: {
                                //         className: 'p-2',
                                //     },
                                // }}
                            />
                        ))}
                    </div>
                </div>
            </CardContent>
        </Card>
    );
}
