import { Card, CardContent, Stack, Typography } from '@mui/material';
import React from 'react';

export default function Listing({ title, description, image_url }) {
    return (
        <Card variant="outlined" className="mt-5 flex flex-col">
            <CardContent>
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
                <div className="pt-3">
                    <Typography variant="body1" className="line-clamp-5">
                        {description.split('\\n').map((line, index) => (
                            <React.Fragment key={index}>
                                {line}
                                <br />
                            </React.Fragment>
                        ))}
                    </Typography>
                </div>
            </CardContent>
        </Card>
    );
}
