import {
  Box,
  HStack,
  Icon,
  Input,
  InputGroup,
  InputLeftElement,
  InputRightElement,
  Stack,
} from "@chakra-ui/react";
import StepperBox from "./StepperBox";
import p1 from "../../assets/2.jpg";
import { IoHappyOutline, IoSend } from "react-icons/io5";
import chatStore from "../../chatStore";
import { useState } from "react";

const chat = [
  "hi",
  "Hello! How can I assist you today? 😊",
  "I'm going to syria next week",
  "That sounds like an interesting trip! Syria is a country with a rich history and cultural heritage. If you have any specific questions or need further assistance, feel free to ask! Safe travels! 🌍✈️",
  "can you plan my 5-day trip to there",
  "### Day 1: Damascus (The Old City)- Places to Visit:  - Umayyad Mosque: One of the oldest and most significant mosques in the world.  - Souq Al-Hamidiyah: A bustling market with a rich history, perfect for souvenirs and local goods.  - Azem Palace: A stunning example of Ottoman architecture, now a museum.  - Street Called Straight (Via Recta): A historic street mentioned in the Bible.- Hotel Suggestion:  - Beit Al Mamlouka: A boutique hotel in the heart of the Old City, known for its traditional architecture and warm hospitality. ###Day 2: Maaloula and Krak des Chevaliers- Places to Visit:  - Maaloula: A picturesque village where Aramaic, the language of Jesus, is still spoken. Visit the monasteries of St. Sergius and St. Thecla.  - Krak des Chevaliers: One of the best-preserved medieval Crusader castles in the world, located near Homs.- Hotel Suggestion:  - Krak des Chevaliers Hotel: A simple but comfortable option near the castle.",
];
const ChatBox = () => {
  const { chat, setChat } = chatStore();
  const [message, setMessage] = useState("");
  //const send = useSendChatQ();
  return (
    <HStack placeContent={"center"} spacing={12} pt={3}>
      <Box />
      <Stack
        boxShadow={`0 10px 20px -2px gray`}
        bgColor={"#7BC5C1"}
        borderRadius={20}
        boxSize={580}
        w={850}
      >
        <Box
          h={532}
          bgImg={p1}
          bgSize={"cover"}
          pb={5}
          mb={-2}
          overflowY={"scroll"}
          sx={{ scrollbarWidth: "thin" }}
        >
          {chat.map((v, ind) => (
            <Box
              backdropFilter={"blur(4.5px)"}
              boxShadow={`5px 12px 10px -10px gray`}
              borderBottomLeftRadius={v.role == "human" ? 20 : 0}
              borderBottomRightRadius={v.role == "human" ? 0 : 20}
              mx={3}
              my={3}
              placeSelf={v.role == "human" ? "end" : "start"}
              borderTopRadius={20}
              bgColor={"rgba(39, 193, 188, 0.6)"}
              p={3}
              w={"fit-content"}
              maxW={500}
            >
              {v.content}{" "}
            </Box>
          ))}
        </Box>

        <InputGroup>
          <Input
            value={message}
            borderBottomRadius={20}
            borderColor={"#D3E3E2"}
            borderTopRadius={0}
            h={12}
            placeholder="plan myschedule for a 5-day trip to tokyo"
            textColor={"black"}
            w={850}
            bgColor={"#D3E3E2"}
            onChange={(e) => setMessage(e.target.value)}
          />
          <InputRightElement>
            <Icon
              as={IoSend}
              cursor={message == "" ? "auto" : "pointer"}
              boxSize={5}
              mt={2}
              color={message == "" ? "gray" : "#59A3A0"}
              onClick={() => {
                if (message != "") {
                  setChat({ role: "human", content: message });
                  //send.mutate({ question: message });
                  setMessage("");
                }
              }}
            />
          </InputRightElement>
          <InputLeftElement>
            <Icon
              mb={-1}
              as={IoHappyOutline}
              cursor={"pointer"}
              boxSize={5}
              mt={2}
              color={"#59A3A0"}
            />
          </InputLeftElement>
        </InputGroup>
      </Stack>

      <Box
        boxShadow={`0 10px 20px -2px gray`}
        bgColor={"#EEEEEE"}
        borderRadius={20}
        boxSize={450}
        h={580}
      >
        <StepperBox />
      </Box>
    </HStack>
  );
};

export default ChatBox;
