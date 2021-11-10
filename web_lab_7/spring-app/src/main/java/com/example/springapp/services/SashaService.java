package com.example.springapp.services;

import com.example.springapp.models.sasha.Program;
import com.example.springapp.repos.sasha.ProgramRepo;
import lombok.AllArgsConstructor;
import org.springframework.stereotype.Service;

@Service
@AllArgsConstructor
public class SashaService {

	private final ProgramRepo programRepo;

	public Program saveProgram(Program program) {
		return programRepo.save(program);
	}


}
