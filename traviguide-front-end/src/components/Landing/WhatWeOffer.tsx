import { HStack, Icon, Stack, Text } from "@chakra-ui/react";
import { LuTentTree } from "react-icons/lu";
import { IoFastFoodOutline } from "react-icons/io5";
import { TbBed } from "react-icons/tb";

const WhatWeOffer = () => {
  return (
    <Stack mt={80} mb={52}>
      <Text fontSize={32} mb={32} placeSelf={"center"}>
        {" "}
        what we offer in <text style={{color:"#6AB4B0", fontWeight:'bold'}}>TRAVIGAIDE?</text>
      </Text>
      <HStack justifyContent={"space-evenly"}>
        <Stack>
          <Icon
            as={IoFastFoodOutline}
            placeSelf={"center"}
            color={"#EAB875"}
            boxSize={20}
          />
          <Text textAlign={"center"} fontWeight={"bold"} fontSize={24} color={"#333333"} >
            Card with Divider
          </Text>
          <Text textAlign={"center"} textColor={"gray.600"} w={300}>
            Card is a flexible component used to group and display content in a
            clear and concise format.
          </Text>
        </Stack>{" "}
        <Stack>
          <Icon
            as={LuTentTree}
            placeSelf={"center"}
            color={"#EAB875"}
            boxSize={20}
          />
          <Text textAlign={"center"} fontWeight={"bold"} fontSize={24} color={"#333333"}>
            Card with Divider
          </Text>
          <Text textAlign={"center"} textColor={"gray.600"} w={300}>
            Card is a flexible component used to group and display content in a
            clear and concise format.
          </Text>
        </Stack>{" "}
        <Stack>
          <Icon
            as={TbBed}
            placeSelf={"center"}
            color={"#EAB875"}
            boxSize={20}
          />
          <Text textAlign={"center"} fontWeight={"bold"} fontSize={24} color={"#333333"}>
            Card with Divider
          </Text>
          <Text textAlign={"center"} textColor={"gray.600"} w={300}>
            Card is a flexible component used to group and display content in a
            clear and concise format.
          </Text>
        </Stack>
      </HStack>
    </Stack>
  );
};

export default WhatWeOffer;
