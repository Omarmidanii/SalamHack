import { Box, Heading, Text } from "@chakra-ui/react";
import { isRouteErrorResponse, useRouteError } from "react-router-dom";

export const ErrorPage = () => {
  const error = useRouteError();
  return (
    <Box padding={5}>
      <Heading textAlign={"center"}>Oops</Heading>
      <Text textAlign={"center"}>
        {isRouteErrorResponse(error)
          ? "What an achievment!! You found a page that does not even exist!! You can go back if you want :) "
          : "An unexpected error occurred"}
      </Text>
    </Box>
  );
};
